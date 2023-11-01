<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
    public function showAll()
    {
        $commandes = Commande::all();
        return response()->json($commandes);
    }
    public function lightShow()
    {
        $commandes = Commande::All()->map(function ($commande) {
            return [
                "id" => $commande->id,
                "nom" => $commande->nom,
            ];
        });
        return response()->json($commandes);
    }

    public function recepCommandeAchat(Request $request)
    {
        $commande = new Commande();
        $commande->numero_commande = $request->nom;
        $commande->save();
        return response()->json($commande);
    }
}
