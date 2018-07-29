<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'desc')->get();

        $posts = Post::where('status', 'PUBLISHED')->latest()->paginate(7);

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

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'PUBLISHED')->first();

        $recommended = Post::where('status', 'PUBLISHED')
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
