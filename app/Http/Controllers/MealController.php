<?php

namespace App\Http\Controllers;

use App\MealCategory;
Use App\Meal;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index(Request $request)
    {
    	// Get meal categories
    	$categories = MealCategory::latest()->get();

    	if ($request->has('q'))
    	{
    		// Get all meals in random order.
    		$meals = Meal::inRandomOrder()
    			->where('is_published', true)
    			->where('meal_name','LIKE','%'.$request->input('q').'%')
    			->paginate(15);

    		$search = true;
    	}
    	else
    	{
    		// Get all meals in random order. Paginate the collection
    		$meals = Meal::latest()
    			->where('is_published', true)
    			->paginate(15);

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

    public function mealsByCategory(Request $request, $category)
    {
    	// Get meal categories
    	$categories = MealCategory::latest()->get();


    	if ($request->has('q'))
        {
            $catDetail = MealCategory::where('meal_category_name', $request->input('category'))->first();
            $meals = Meal::latest()
                ->where('is_published', true)
                ->where('meal_category_id', $catDetail->id)
                ->where('meal_name','LIKE','%'.$request->input('q').'%')
                ->paginate(15);

            $search = true;
        }
        else
        {
            // Get meals is the selected category
            $meals = MealCategory::with('meal')
                ->where('slug', $category)
                ->first();

            $search = false;
        }


    	// Return to view
    	return view('shop.mealsByCategory', compact('categories', 'meals', 'search'));
    }
}
