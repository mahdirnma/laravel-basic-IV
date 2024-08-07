<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        File::create([
            'description' => 'lorem ipsum',
            'grades' => 'first grade, second grade',
            'student_id' => '2',
        ]);
        File::create([
            'description' => 'lorem ipsum2',
            'grades' => 'first grade, second grade, third grade',
            'student_id' => '1',
        ]);

    }
}
