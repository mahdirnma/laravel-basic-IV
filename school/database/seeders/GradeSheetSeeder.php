<?php

namespace Database\Seeders;

use App\Models\GradeSheet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GradeSheet::create([
            'average' => '15',
            'grade' => '2',
            'student_id' => '2',
        ]);
        GradeSheet::create([
            'average' => '19',
            'grade' => '3',
            'student_id' => '1',
        ]);
        GradeSheet::create([
            'average' => '19.5',
            'grade' => '2',
            'student_id' => '1',
        ]);
        GradeSheet::create([
            'average' => '20',
            'grade' => '1',
            'student_id' => '1',
        ]);

    }
}
