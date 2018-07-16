<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = [
    	'post_category_name',
    	'slug',
    	'post_category_description',
    	'user_id'
    ];

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function post()
    {
    	return $ths->hasMany(Post::class);
    }
}
