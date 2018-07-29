<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'guest_id',
    	'subtotal',
    	'vat',
    	'total',
    	'is_fulfilled',    	
    ];

    public function guest()
    {
    	return $this->belongsTo(Guest::class);
    }
}
