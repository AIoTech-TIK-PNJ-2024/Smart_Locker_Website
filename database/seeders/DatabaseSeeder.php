<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Locker;
use App\Models\Review;
use App\Models\RiwayatPeminjaman;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // default jumlah loker 3
        Locker::factory()->create([
            'nomor_locker' => 1,
        ]);

        // pengguna random 3
        // User::factory(3)->create();

        //admin
        // User::factory()->create([
        //     'username' => 'admin123',
        //     'password' => static::$password ??= Hash::make('admin123'),
        //     'id_locker' => null,
        //     'role' => 'admin',
        // ]);

        //review 5
        Review::factory(20)->create();

        // riwayat peminjaman 8
        RiwayatPeminjaman::factory(10)->create();
    }
}
