<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\School;
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

    public function add()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $schools = School::where('is_active',1)->get();
        return view('admin.student.add',compact('schools'));
    }

    public function create(StoreStudentRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $age=$request->input('age');
        $address=$request->input('address');
        $gender=$request->input('gender');
        $school_id=$request->input('school');
        $student = Student::create([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'age'=>$age,
            'address'=>$address,
            'gender'=>$gender,
            'school_id'=>$school_id,
        ]);
        if($student){
            return to_route('student.index');
        }
    }

    public function update(Student $student)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $schools=School::all();
        return view('admin.student.update',compact('student','schools'));
    }

    public function edit(Student $student,StoreStudentRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $age=$request->input('age');
        $address=$request->input('address');
        $gender=$request->input('gender');
        $school_id=$request->input('school');
        $status=$student->update([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'age'=>$age,
            'address'=>$address,
            'gender'=>$gender,
            'school_id'=>$school_id,
        ]);
        if($status){
            return to_route('student.index');
        }
    }
    public function delete(Student $student){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.student.delete',compact('student'));
    }
    public function destroy(Student $student){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $status=$student->update([
            'is_active'=>0,
        ]);
        if($status){
            return to_route('student.index');
        }
    }
}
