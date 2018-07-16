<?php

namespace App\Http\Controllers;

use App\Models\MealCategory;
use App\Models\Meal;
use App\Models\Order;
use App\Models\OrderCart;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	$categoryCount = MealCategory::all()->count();
    	if ($categoryCount >= 6) 
    	{
    		$set = 6;	
    	}
    	else
    	{
    		$set = 3;
    	}

    	$categories = MealCategory::InRandomOrder()->take($set)->get();

    	$meals = Meal::InRandomOrder()->where('is_featured', true)->take(6)->get();

        $posts = Post::where('is_published', true)->latest()->take(3)->get();

    	return view('home.index',compact('categories', 'meals', 'posts'));
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function thanks()
    {
    	if (!session('order'))
        {
            return redirect()->route('shop.cart');
        }

        $orderFromSession = session('order');

        $cartDetails = DB::table('orders')
            ->join('guests', 'orders.guest_id', '=', 'guests.id')
            ->join('order_carts', 'guests.cart_row_id', '=', 'order_carts.row_id')
            ->join('meals', 'order_carts.meal_id', '=', 'meals.id')
            ->select('orders.*', 'guests.*', 'order_carts.*', 'meals.*')
            ->where('orders.id', $orderFromSession->id)
            ->get();        

        return view('shop.thanks', compact('cartDetails'));
    }
}
