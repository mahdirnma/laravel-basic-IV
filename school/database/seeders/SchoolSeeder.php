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
            'address' => 'malayer',
            'telephone' => '08136644987',
            'type' => 'general',
        ]);
        School::create([
            'title' => 'nemune',
            'address' => 'hamedan',
            'telephone' => '08136634987',
            'type' => 'specialized',
        ]);

    }
}
