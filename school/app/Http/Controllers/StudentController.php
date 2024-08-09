<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $students = Student::with('school')->where('is_active',1)->orderBy('id','desc')->get();
        return view('admin.student.index',compact('students'));
    }
}
