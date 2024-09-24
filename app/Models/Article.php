<?php

   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class Article extends Model
   {
       use HasFactory;

       // Define the table if it's not the plural of the model name
       protected $table = 'articles';

       // Define the fillable fields
       protected $fillable = ['title', 'content'];
   }
