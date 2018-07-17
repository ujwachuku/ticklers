<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = PostCategory::orderBy('post_category_name', 'desc')->get();

        $posts = Post::where('is_published', true)->latest()->paginate(5);

        return view('posts.index', compact('categories', 'posts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        $recommended = Post::where('is_published', true)
        ->where('slug', '<>', $post->slug)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('posts.post', compact('post', 'recommended'));
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }

    public function postsByCategory()
    {
        
    }
}
