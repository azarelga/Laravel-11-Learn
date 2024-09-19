<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About','nama'=>'Azarel']);
});
Route::get('/posts', function() {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug'=>'judul-artikel-1',
            'author' => 'Azarel Grahandito Adi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug'=>'judul-artikel-2',
            'author' => 'Azarel Grahandito Adi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug'=>'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Azarel Grahandito Adi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 2,
            'slug'=>'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Azarel Grahandito Adi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});
