<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Azarel Grahandito Adi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Azarel Grahandito Adi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
            ]
        ];
    }
    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        } else {
            return $post;
        }
    }
};

?>
