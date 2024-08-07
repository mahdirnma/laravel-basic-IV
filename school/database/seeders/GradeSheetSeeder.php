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
            'student_id' => '2',
        ]);
        GradeSheet::create([
            'average' => '19',
            'student_id' => '1',
        ]);

    }
}
