<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Post extends Model
{
    use Resizable;

    public function user()
    {
    	return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    
}
