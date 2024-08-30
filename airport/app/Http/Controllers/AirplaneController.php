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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAirplaneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Airplane $airplain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airplane $airplain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAirplaneRequest $request, Airplane $airplain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airplane $airplain)
    {
        //
    }
}
