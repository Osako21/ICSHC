<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ScolagoDbModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function listClientScolago()
    {
        
        $scolagoDbModel = new ScolagoDbModel();
        $clients = $scolagoDbModel->getEmployees();
        return response()->json($clients);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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
    public function update(Request $request, Client $client)
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
    public function showAll()
    {
        $clients = Client::all();
        return response()->json($clients);
    }
    public function lightShow()
    {
        $clients = Client::All()->map(function ($client) {
            return [
                "id" => $client->id,
                "nom" => $client->nom,
            ];
        });
        return response()->json($clients);
    }
}
