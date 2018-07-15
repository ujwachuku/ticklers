<?php

namespace App\Http\Controllers;

use App\Models\MealCategory;
use App\Models\Meal;
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

    	return view('home.index',compact('categories', 'meals'));
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
