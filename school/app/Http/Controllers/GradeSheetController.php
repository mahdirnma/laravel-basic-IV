<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeSheetRequest;
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

    public function add(Student $student)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.gradeSheet.add', compact('student'));
    }
    public function create(Student $student,StoreGradeSheetRequest $request){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $grade=$request->input('grade');
        $average=$request->input('average');
        $status=$student->gradeSheets()->create([
            'grade'=>$grade,
            'average'=>$average,
        ]);
        if ($status) {
            return to_route('gradeSheet.index', $student);
        }
    }
}
