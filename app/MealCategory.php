<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class MealCategory extends Model
{
    use Resizable;

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function meal()
    {
    	return $this->hasMany(Meal::class);
    }

    public function save(array $options = [])
    {
        $this->user_id = auth()->id();

        parent::save();
    }
}
