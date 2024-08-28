<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // Validation logic
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        // Business logic
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect()->route('posts.index');
    }

    public function index()
    {
        // Data retrieval
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}