<?php


/**
 * use eager loading to preload relation, and only select columns we need
 */

//method 1
$posts = Post::select(['id', 'title', 'body'])
            ->with(['comments' => function ($query) {
                $query->select('id', 'post_id', 'body');
            }])
            ->get();

//method 2
$posts = Post::select(['id', 'title', 'body'])
            ->with(['comments:id,post_id,body'])
            ->get();

foreach ($posts as $post) {
    foreach ($post->comments as $comment) {
        echo $comment->body;
    }
}