<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Refactor index action
     * pass posts directly on view instead of variable creation and use pagination for better performance
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }

    /**
     * Refactor store action
     * 1- create FormRequest for seperate validation logic
     * 2- use mass assignment to create post with validated data if validation passes
     * 3- flash message to notify that create proccess success
     */
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}