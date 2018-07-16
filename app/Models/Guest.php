<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
    	'cart_row_id',
    	'fname',
    	'lname',
    	'email',
    	'phone',
    	'address',
    	'city',
    	'instructions'
    ];

    public function cart()
    {
    	return $this->hasOne(OrderCart::class, 'cart_row_id', 'row_id');
    }

    public function order()
    {
    	return $this->hasOne(Order::class);
    }
}
