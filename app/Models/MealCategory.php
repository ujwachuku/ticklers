<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealCategory extends Model
{
    protected $fillable = [
    	'meal_category_name',
    	'slug',
    	'meal_category_description',
    	'meal_category_image',
    	'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function meal()
    {
    	return $this->hasMany(Meal::class);
    }
}
