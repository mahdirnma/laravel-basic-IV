<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(Student $student){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $file = $student->file;
        return view('admin.file.index', compact('file', 'student'));
    }
}
