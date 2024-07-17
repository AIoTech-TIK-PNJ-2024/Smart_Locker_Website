<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sentimen = ['Positive', 'Negative', 'Neutral'];
        return [
            'review' => fake()->sentence(rand(6, 8)),
            'sentimen' => $sentimen[rand(0, 2)],
        ];
    }
}
