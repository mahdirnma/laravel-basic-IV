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

    public function update(Patient $patient)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $info=Information::all();
        $hospitals = Hospital::all()->where('is_active',1);
        return view('admin.patient.update',compact('patient','info','hospitals'));
    }

    public function edit(Patient $patient, StorePatientRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $hospital = $request->input('hospital');
        $information = $request->input('information');
        $status=$patient->update([
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'hospital_id' => $hospital,
        ]);
        $patient->information()->update([
            'description' => $information,
        ]);
        if($status){
            return to_route('patient.index');
        }
    }

    public function delete(Patient $patient)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.patient.delete',compact('patient'));
    }

    public function destroy(Patient $patient)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $status=$patient->update([
            'is_active' => 0,
        ]);
        if($status){
            return to_route('patient.index');
        }
    }
}
