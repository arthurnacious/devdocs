<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $post_ids = Post::all()->pluck('id');
        $comment_ids = Comment::all()->pluck('id') ?? [];
        $user_ids = User::all()->pluck('id');
        return [
            'user_id' => fake()->randomElement($user_ids),
            'post_id' => fake()->randomElement($post_ids),
            'parent_comment_id' => fake()->randomElement([null, null, null, fake()->randomElement($comment_ids)]),
            'content' => fake()->paragraph(),
        ];
    }
}
