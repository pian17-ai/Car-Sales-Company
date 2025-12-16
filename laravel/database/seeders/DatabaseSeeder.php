<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            RegionalsSeeder::class,
            ValidatorSeeder::class,
            CarSeeder::class,
            CarMonthOptionSeeder::class
        ]);
    }
}
