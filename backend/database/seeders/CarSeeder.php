<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            // BMW
            [
                'name' => 'BMW M3 Competition',
                'brand' => 'BMW',
                'type' => 'sport',
                'year' => 2023,
                'price' => 2400000000
            ],
            [
                'name' => 'BMW M4 Coupe',
                'brand' => 'BMW',
                'type' => 'sport',
                'year' => 2022,
                'price' => 2500000000
            ],
            [
                'name' => 'BMW X5 xDrive40i',
                'brand' => 'BMW',
                'type' => 'suv',
                'year' => 2023,
                'price' => 1700000000
            ],
            [
                'name' => 'BMW i7 xDrive60',
                'brand' => 'BMW',
                'type' => 'electric',
                'year' => 2024,
                'price' => 3100000000
            ],

            // Porsche
            [
                'name' => 'Porsche 911 GT3 RS',
                'brand' => 'Porsche',
                'type' => 'sport',
                'year' => 2023,
                'price' => 9200000000
            ],
            [
                'name' => 'Porsche 911 Carrera S',
                'brand' => 'Porsche',
                'type' => 'sport',
                'year' => 2022,
                'price' => 4800000000
            ],
            [
                'name' => 'Porsche Cayenne Turbo',
                'brand' => 'Porsche',
                'type' => 'suv',
                'year' => 2023,
                'price' => 4200000000
            ],
            [
                'name' => 'Porsche Taycan GTS',
                'brand' => 'Porsche',
                'type' => 'electric',
                'year' => 2024,
                'price' => 3900000000
            ]
        ]);
    }
}
