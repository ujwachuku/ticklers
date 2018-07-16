<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{
    protected $fillable = [
    	'row_id',
    	'meal_id',
    	'qty'
    ];

    public function getRouteKeyName()
    {
    	return 'row_id';
    }

    public function meal()
    {
    	return $this->hasMany(Meal::class);
    }

    public function guest()
    {
    	return $this->belongsTo(Guest::class);
    }
}
