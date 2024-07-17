<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected static ?string $password;
    public function definition(): array
    {
        return [
            'username' => fake()->userName(),
            'password' => static::$password ??= Hash::make('password'),
            'kode_barcode' => fake()->randomNumber(7, true),
            'id_locker' => fake()->numberBetween(1, 3),
        ];
    }
}
