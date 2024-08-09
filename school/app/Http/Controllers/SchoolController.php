<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRequest;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $schools = School::all()->where('is_active',1);
        return view('admin.school.index',compact('schools'));
    }
    public function add(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.school.add');
    }

    public function create(StoreSchoolRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title=$request->input('title');
        $city=$request->input('city');
        $address=$request->input('address');
        $telephone=$request->input('telephone');
        $type=$request->input('type');
        $school=School::create([
            'title'=>$title,
            'city'=>$city,
            'address'=>$address,
            'telephone'=>$telephone,
            'type'=>$type,
        ]);
        if($school){
            return to_route('school.index');
        }
    }

    public function update(School $school)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.school.update',compact('school'));
    }

    public function edit(School $school,StoreSchoolRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title=$request->input('title');
        $city=$request->input('city');
        $address=$request->input('address');
        $telephone=$request->input('telephone');
        $type=$request->input('type');
        $status=$school->update([
            'title'=>$title,
            'city'=>$city,
            'address'=>$address,
            'telephone'=>$telephone,
            'type'=>$type,
        ]);
        if($status){
            return to_route('school.index');
        }
    }
}
