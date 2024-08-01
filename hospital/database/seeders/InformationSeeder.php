<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::create([
            'description' => 'lorem ipsum1',
            'patient_id'=>1,
        ]);
        Information::create([
            'description' => 'lorem ipsum2',
            'patient_id'=>2,
        ]);

    }
}
