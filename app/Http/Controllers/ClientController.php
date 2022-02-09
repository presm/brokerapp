<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use


class ClientController extends Controller
{
    //
    public function index()
    {
        return Clients::all();
    }

    public function show(Clients $client)
    {
        return $client;
    }

    public function store(Request $request)
    {
        $client = Clients::create($request->all());

        return response()->json($client, 201);
    }

    public function update(Request $request, Clients $client)
    {
        $client->update($request->all());

        return response()->json($client, 200);
    }

    public function delete(Clients $client)
    {
        $client->delete();

        return response()->json(null, 204);
    }
}
