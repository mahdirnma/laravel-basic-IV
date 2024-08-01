<?php

namespace App\Http\Controllers;

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
}
