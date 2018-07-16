<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Guest;
use App\Models\OrderCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate guest object
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

            // Save cart
            $cart->save();
        }

                        

        // Save guest
        $guest = new Guest;

        $guest->cart_row_id = $cartId;
        $guest->fname = $request->input('first_name');
        $guest->lname = $request->input('last_name');
        $guest->email = $request->input('email');
        $guest->phone = $request->input('phone');
        $guest->address = $request->input('address');
        $guest->city = $request->input('city');
        $guest->instructions = $request->input('instructions');

        $guest->save();

        // Save order
        $order = new Order;

        $order->guest_id = $guest->id;
        $order->subtotal = Cart::subtotal();
        $order->vat = Cart::tax();
        $order->total = Cart::total();
        $order->is_fulfilled = false;

        $order->save();

        session(['order' => $order]);

        // Destroy cart
        Cart::destroy();

        // Get last saved order and redirect to thanks page
        return redirect()->route('shop.thanks');
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
