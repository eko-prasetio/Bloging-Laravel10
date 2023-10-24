<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    dd(Sheets::collection('posts')->all());
   $posts = Sheets::collection('posts')->all();
    return view('posts.index',[
        'posts' => $posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Sheets::collection('posts')->all()->where('slug', $slug)->first();
    abort_if(is_null($post), 404);

    return view('posts.show',[
        'post' => $post
    ]);
});
