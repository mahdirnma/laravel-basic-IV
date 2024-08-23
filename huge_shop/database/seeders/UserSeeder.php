<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'ali',
            'lastname' => 'azizi',
            'username' => 'alii',
            'password' => '123',
        ]);
        User::create([
            'firstname' => 'reza',
            'lastname' => 'alizade',
            'username' => 'rezaa',
            'password' => '456',
        ]);

    }
}
