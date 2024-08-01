<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Hospital;
use App\Models\Information;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $patients = Patient::with('hospital')->with('prescriptions')->with('information')->where('is_active',1)->get();
        return view('admin.patient.index',compact('patients'));
    }
    public function add(){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $hospitals = Hospital::all()->where('is_active',1);
        return view('admin.patient.add',compact('hospitals'));
    }

    public function create(StorePatientRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $hospital = $request->input('hospital');
        $information = $request->input('information');
        $patient = Patient::create([
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'hospital_id' => $hospital,
        ]);
        $patient->information()->create([
            'description' => $information,
        ]);
        if($patient){
            return to_route('patient.index');
        }
    }
}
