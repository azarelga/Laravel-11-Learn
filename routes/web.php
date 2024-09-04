<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['nama'=>'Azarel']);
});

Route::get('/blog', [ArticleController::class, 'index']);
Route::get('/blog/{id}', [ArticleController::class, 'show']);

