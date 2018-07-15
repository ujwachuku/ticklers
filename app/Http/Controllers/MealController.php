<?php

namespace App\Http\Controllers;

use App\Models\MealCategory;
Use App\Models\Meal;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index(Request $request)
    {
    	// Get meal categories
    	$categories = MealCategory::inRandomOrder()->get();

    	if ($request->has('q')) 
    	{
    		// Get all meals in random order.
    		$meals = Meal::inRandomOrder()
    			->where('is_published', true)
    			->where('meal_name','LIKE','%'.$request->input('q').'%')
    			->get();

    		$search = true;
    	}
    	else
    	{
    		// Get all meals in random order. Paginate the collection
    		$meals = Meal::inRandomOrder()
    			->where('is_published', true)
    			->get();

    		$search = false;
    	}   	

    	// Return to view
    	return view('shop.index', compact('categories', 'meals', 'search'));
    }

    public function show(Meal $meal)
    {
    	$upSells = Meal::where('is_published', true)
    		->where('slug', '<>', $meal->slug)
    		->inRandomOrder()
    		->take(5)
    		->get();

    	// return to view
    	return view('shop.meal', compact('meal', 'upSells'));
    }

    public function mealsByCategory($category)
    {
    	// Get meal categories
    	$categories = MealCategory::inRandomOrder()->get();

    	// Get meals is the selected category
    	$meals = MealCategory::with('meal')
    		->where('slug', $category)
    		->first();

    	$search = true;
    	
    	// Return to view
    	return view('shop.mealsByCategory', compact('categories', 'meals', 'search'));
    }
}
