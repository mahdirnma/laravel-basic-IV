<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHospitalRequest;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $hospitals = Hospital::all();
        return view('admin.hospital.index', compact('hospitals'));
    }

    public function add()
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.hospital.add');
    }

    public function create(StoreHospitalRequest $request)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title=$request->title;
        $city=$request->city;
        $zone=$request->zone;
        $address=$request->address;
        $chairman=$request->chairman;
        $range=$request->range;
        $specialized=$request->specialized;
        $hospital = Hospital::create([
            'title'=>$title,
            'city'=>$city,
            'zone'=>$zone,
            'address'=>$address,
            'chairman'=>$chairman,
            'range'=>$range,
            'specialized'=>$specialized,
        ]);
        if ($hospital) {
            return to_route('hospital.index');
        }
    }

    public function update(Hospital $hospital)
    {
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        return view('admin.hospital.update', compact('hospital'));
    }
    public function edit(Hospital $hospital, StoreHospitalRequest $request){
        if (!session()->has('user')) {
            return to_route('login.show');
        }
        $title=$request->title;
        $city=$request->city;
        $zone=$request->zone;
        $address=$request->address;
        $chairman=$request->chairman;
        $range=$request->range;
        $specialized=$request->specialized;
        $status=$hospital->update([
            'title'=>$title,
            'city'=>$city,
            'zone'=>$zone,
            'address'=>$address,
            'chairman'=>$chairman,
            'range'=>$range,
            'specialized'=>$specialized,
        ]);
        if ($status) {
            return to_route('hospital.index');
        }
    }
}
