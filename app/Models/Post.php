<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'post_name',
    	'slug',
    	'post_content',
    	'post_category_id',
    	'post_image',
    	'is_featured',
    	'is_published',
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

    public function category()
    {
    	return $this->belongsTo(PostCategory::class);
    }
}
