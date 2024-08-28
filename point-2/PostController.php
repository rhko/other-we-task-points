<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}