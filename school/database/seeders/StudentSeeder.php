<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'firstname' => 'erfan',
            'lastname' => 'abbasi',
            'age' => '15',
            'gender' => 'male',
            'address' => 'malayer',
            'school_id' => '2',
        ]);
        Student::create([
            'firstname' => 'sara',
            'lastname' => 'azadi',
            'age' => '10',
            'gender' => 'female',
            'address' => 'hamedan',
            'school_id' => '1',
        ]);

    }
}
