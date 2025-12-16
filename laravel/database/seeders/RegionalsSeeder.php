<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regionals')->insert(
            [
                [
                    'province' => 'DKI Jakarta',
                    'district' => 'South Jakarta'
                ],
                [
                    'province' => 'DKI Jakarta',
                    'district' => 'Center Jakarta'
                ],
            ]
        );
    }
}
