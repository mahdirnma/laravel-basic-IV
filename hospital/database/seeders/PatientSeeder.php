<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'name' => 'reza',
            'age'=>'19',
            'gender'=>'male',
            'hospital_id'=>1,
        ]);
        Patient::create([
            'name' => 'aynaz',
            'age'=>'1',
            'gender'=>'female',
            'hospital_id'=>2,
        ]);

    }
}
