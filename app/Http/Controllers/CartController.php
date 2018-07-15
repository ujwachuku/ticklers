<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $itemCount = Cart::content()->count();
        
        return view('shop.cart', compact('itemCount'));
    }

    public function store(Request $request)
    {
        Cart::add($request->input('id'), $request->input('name'), $request->input('qty'), $request->input('price'))
            ->associate(Meal::class);

        return redirect()->route('shop.cart')->withSuccess('Meal successfully added to cart');
    }

    public function destroy()
    {
        Cart::destroy();

        return redirect()->back();
    }
}
