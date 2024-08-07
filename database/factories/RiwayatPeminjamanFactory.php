<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatPeminjaman>
 */
class RiwayatPeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->userName(),
            'id_locker' => fake()->numberBetween(1, 3),
            'durasi' => fake()->randomNumber(2, true),
        ];
    }
}
