<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Hospital::create([
             'title' => 'besat',
             'city'=>'hamedan',
             'zone'=>'1',
             'address'=>'meydan',
             'chairman'=>'dr rezae',
             'range'=>'general',
         ]);
         Hospital::create([
             'title' => 'mehr',
             'city'=>'malayer',
             'zone'=>'1',
             'address'=>'bolvar',
             'chairman'=>'dr asadi',
             'range'=>'specialized',
             'speciality'=>'child'
         ]);

    }
}
