<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(10, false),
            'content' => fake()->paragraph,
            'author' => fake()->name,
            'slug' => Str::slug(fake()->sentence()),
            'created_at' => fake()->dateTime,
            'updated_at' => fake()->dateTime,
        ];
    }
}
