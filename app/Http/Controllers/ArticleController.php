<?php

namespace App\Http\Controllers;

use App\Models\Article;

   class ArticleController extends Controller
   {
       // Method to list all blog articles
       public function index()
       {
           $articles = Article::all();
           return view('blogs.index', compact('articles'));
       }

       // Method to show a specific blog article by its ID
       public function show($id)
       {
           $article = Article::findOrFail($id);
           return view('blogs.show', compact('article'));
       }
   }
