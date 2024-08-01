<?php

namespace Database\Seeders;

use App\Models\Prescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prescription::create([
            'title' => 'stomach',
            'description'=>'1',
            'patient_id'=>1,
            'hospital_id'=>1,
        ]);
        Prescription::create([
            'title' => 'fever',
            'description'=>'1',
            'patient_id'=>2,
            'hospital_id'=>2,
        ]);

    }
}
