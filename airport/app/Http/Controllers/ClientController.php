<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\Airplane;
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
    public function update(Client $client)
    {
        return view('admin.client.update', compact('client'));
    }
    public function edit(StoreClientRequest $request, Client $client)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $birth_year = $request->input('birth_year');
        $client->update([
            'name' => $name,
            'gender' => $gender,
            'birth_year' => $birth_year,
        ]);
        return to_route('client.index');
    }

    public function ticket(Client $client)
    {
        return view('admin.ticket.index', compact('client'));
    }
    public function ticket_create(Client $client)
    {
        $airplanes = Airplane::all();
        return view('admin.ticket.add', compact('client', 'airplanes'));
    }

    public function ticket_store(Client $client,StoreTicketRequest $request)
    {
        $flight_time = $request->input('flight_time');
        $seat_number = $request->input('seat_number');
        $line=$request->input('line');
        $airplane=$request->input('airplane');
        $client->airplanes()->attach($airplane,['flight_time'=>$flight_time,'seat_number'=>$seat_number,'line'=>$line]);
        return to_route('ticket.index', compact('client'));
    }
}
