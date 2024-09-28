<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'username', 'content'];
    protected $with = ['author', 'category'];
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'username');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
