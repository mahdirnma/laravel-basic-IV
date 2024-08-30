<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Client::create([
             'name' => 'ali',
             'gender' => 'male',
             'birth_year' => '1999',
         ]);
         Client::create([
             'name' => 'sara',
             'gender' => 'female',
             'birth_year' => '1996',
         ]);
    }
}
