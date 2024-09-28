<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Azarel']);
});

Route::get('/posts', function () {
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'subtitle' => '', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => $user->username, 'subtitle' => count($user->posts) . ' Posts by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => $category->name, 'subtitle' => count($category->posts) . ' Posts about ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
