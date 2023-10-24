<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    dd(Sheets::collection('posts')->all());
   $posts = Sheets::collection('posts')->all();
    return view('posts.index',[
        'posts' => $posts
    ]);
});

Route::get('/posts/{post}', function ($post) {
    return view('posts.show',[
        'post' => $post
    ]);
});
