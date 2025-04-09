<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id' => fake()->randomElement(User::all()->pluck('id')),
            'parent_post_id' => fake()->randomElement([null, null, null, fake()->randomElement(Post::all()->pluck('id'))]),
            'category_id' => fake()->randomElement(Category::all()->pluck('id')),
            'title' => fake()->sentence(),
            'page_name' => fake()->sentence(),
            'functionality' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
        ];
    }
}
