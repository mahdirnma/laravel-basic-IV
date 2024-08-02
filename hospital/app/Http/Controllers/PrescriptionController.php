<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrescriptionRequest;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index(Prescription $prescription)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $prescriptions= Prescription::with('patient')->with('hospital')->where('patient_id', $prescription->patient_id)->get();
        return view('admin.prescription.index', compact('prescriptions'));
    }

    public function add()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $hospitals=Hospital::all();
        $patients=Patient::all();
        return view('admin.prescription.add', compact('hospitals','patients'));
    }

    public function create(StorePrescriptionRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title=$request->input('title');
        $description=$request->input('description');
        $patient_id=$request->input('patient');
        $hospital_id=$request->input('hospital');
        $prescription= Prescription::create([
            'title'=>$title,
            'description'=>$description,
            'patient_id'=>$patient_id,
            'hospital_id'=>$hospital_id,
        ]);
        if ($prescription) {
            return to_route('prescription.index',compact('prescription'));
        }else{
            return to_route('prescription.add');
        }
    }
}
