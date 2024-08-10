<?php

namespace App\Http\Controllers;

use App\Models\GradeSheet;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeSheetController extends Controller
{
    public function index(Student $student)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $gradeSheets = $student->gradeSheets/*->orderBy('grade', 'asc')*/;
        return view('admin.gradeSheet.index', compact('gradeSheets', 'student'));
    }
}
