<?php

namespace Database\Seeders;

use App\Models\Airplane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirplaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Airplane::create([
            'flight_code' => '5487965',
            'capacity' => '50',
            'type' => 'economy',
        ]);
        Airplane::create([
            'flight_code' => '5486465',
            'capacity' => '30',
            'type' => 'first class',
        ]);
    }
}
