<?php

$posts = Post::all();

foreach ($posts as $post) {
    // This will result in N+1 queries
    foreach ($post->comments as $comment) {
        echo $comment->body;
    }
}