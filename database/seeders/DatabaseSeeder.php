<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Locker;
use App\Models\Pengguna;
use App\Models\Review;
use App\Models\RiwayatPeminjaman;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // default jumlah loker 3
        for ($i = 1; $i <= 3; $i++) {
            Locker::factory()->create([
                'nomor_locker' => $i,
            ]);
        }

        // pengguna random 3
        User::factory(3)->create();

        //review 5
        Review::factory(5)->create();

        // riwayat peminjaman 8
        RiwayatPeminjaman::factory(8)->create();
    }
}
