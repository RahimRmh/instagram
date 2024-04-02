<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
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
        $images = ['post 1.jpeg','post 2.jpeg','post 3.jpeg','post 4.jpeg'];
        return [
            'image' => 'posts/'.fake()->randomElement($images),
            'description' => fake()->sentence(),
            'description' => fake()->sentence(),
            'user_id' => User::factory(),
            'slug'=>fake()->regexify('[A-Z][0-9]{10}')
        ];
    }
}
