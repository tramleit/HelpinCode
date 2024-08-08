<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body' => $this->faker->paragraph(5),
            'user_id' => rand(1, 7),
            'channel_id' => rand(1, 10),
        ];
    }
}
