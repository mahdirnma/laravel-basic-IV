<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create([
            'title' => 'jahad',
            'city' => 'malayer',
            'address' => 'jahad',
            'telephone' => '08136644987',
            'type' => 'general',
        ]);
        School::create([
            'title' => 'nemune',
            'city' => 'hamedan',
            'address' => 'jolan',
            'telephone' => '08136634987',
            'type' => 'specialized',
        ]);

    }
}
