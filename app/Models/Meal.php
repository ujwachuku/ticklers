<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
    	'meal_name',
    	'slug',
    	'price',
    	'meal_description',
    	'meal_iamge',
    	'meal_category_id',
    	'user_id',
    	'is_published'
    ];

    public function getRouteKeyname()
    {
        return 'slug';
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function mealCategory()
    {
    	return $this->belongsTo(MealCategory::class, 'meal_category_id');
    }

    public function presentPrice()
    {
        $price = 'N'.$this->price;
        return $price;
    }
}
