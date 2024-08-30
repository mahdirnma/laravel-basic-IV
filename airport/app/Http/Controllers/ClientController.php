<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }
    public function create()
    {
        return view('admin.client.add');
    }
    public function store(StoreClientRequest $request)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $birth_year = $request->input('birth_year');
        $client=Client::create([
            'name' => $name,
            'gender' => $gender,
            'birth_year' => $birth_year,
        ]);
        if($client){
            return to_route('client.index');
        }
    }
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
