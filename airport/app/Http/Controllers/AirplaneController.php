<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use App\Http\Requests\StoreAirplaneRequest;
use App\Http\Requests\UpdateAirplaneRequest;
use App\Models\Client;

class AirplaneController extends Controller
{
    public function dashboard()
    {
        $airplanes = Airplane::all()->count();
        $clients= Client::all()->count();
        return view('admin.index',compact('airplanes','clients'));
    }
    public function index()
    {
        $airplanes = Airplane::all();
        return view('admin.airplane.index',compact('airplanes'));
    }
    public function create()
    {
        return view('admin.airplane.add');
    }
    public function store(StoreAirplaneRequest $request)
    {
        $flight_code = $request->input('flight_code');
        $capacity = $request->input('capacity');
        $type = $request->input('type');
        $airplane = Airplane::create([
            'flight_code' => $flight_code,
            'capacity' => $capacity,
            'type' => $type,
        ]);
        if($airplane){
            return to_route('airplane.index');
        }
    }
    public function update(Airplane $airplane)
    {
        return view('admin.airplane.update',compact('airplane'));
    }
    public function edit(StoreAirplaneRequest $request, Airplane $airplane)
    {
        $flight_code = $request->input('flight_code');
        $capacity = $request->input('capacity');
        $type = $request->input('type');
        $airplane->update([
            'flight_code' => $flight_code,
            'capacity' => $capacity,
            'type' => $type,
        ]);
        return to_route('airplane.index');
    }
}
