<?php

namespace App\Http\Controllers;

use App\Order;
use App\Guest;
use App\OrderCart;
use Mail;
use App\Mail\OrderReceived;
use App\Mail\OrderReceivedManagement;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        $cartCount = $request->input('cart_count');

        $cartId = uniqid(true);

        $requestCart = json_decode($request->input('cart'));

        foreach (Cart::content() as $row)
        {
            $cart = new OrderCart;

            $cart->row_id = $cartId;
            $cart->meal_id = $row->id;
            $cart->qty = $row->qty;

            $cart->save();
        }

        $guest = new Guest;

        $guest->order_cart_id = $cartId;
        $guest->fname = $request->input('first_name');
        $guest->lname = $request->input('last_name');
        $guest->email = $request->input('email');
        $guest->phone = $request->input('phone');
        $guest->address = $request->input('address');
        $guest->city = $request->input('city');
        $guest->instructions = $request->input('instructions');

        $guest->save();

        $order = new Order;

        $order->guest_id = $guest->id;
        $order->subtotal = Cart::subtotal();
        $order->vat = Cart::tax();
        $order->total = Cart::total();
        $order->is_fulfilled = false;

        $order->save();

        Mail::to($guest->email)->send(new OrderReceived($order));
        Mail::to('alliedthrust.tech@gmail.com')->send(new OrderReceivedManagement($order));
        Mail::to('emekathrust@yahoo.com')->send(new OrderReceivedManagement($order));

        session(['order' => $order]);

        Cart::destroy();

        return redirect()->route('shop.thanks');
    }
}
