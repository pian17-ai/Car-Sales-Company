<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarMonthOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_month_options')->insert([
            [
                'car_id' => 1,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 1,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 1,
                'month' => 36,
                'interest' => 0.12
            ],
            [
                'car_id' => 2,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 2,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 2,
                'month' => 36,
                'interest' => 0.12
            ],
            [
                'car_id' => 3,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 3,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 3,
                'month' => 36,
                'interest' => 0.12
            ],
            [
                'car_id' => 4,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 4,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 4,
                'month' => 36,
                'interest' => 0.12
            ],
            [
                'car_id' => 5,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 5,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 5,
                'month' => 36,
                'interest' => 0.12
            ],
            [
                'car_id' => 6,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 6,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 6,
                'month' => 36,
                'interest' => 0.12
            ],
            [
                'car_id' => 7,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 7,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 7,
                'mouth' => 36,
                'interest' => 0.12
            ],
            [
                'car_id' => 8,
                'month' => 12,
                'interest' => 0.05
            ],
            [
                'car_id' => 8,
                'month' => 24,
                'interest' => 0.08
            ],
            [
                'car_id' => 8,
                'month' => 36,
                'interest' => 0.12
            ],
        ]);
    }
}
