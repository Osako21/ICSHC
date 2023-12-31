<?php

namespace App\Http\Controllers;

use App\Models\Statut;
use App\Models\Actif;

use Illuminate\Http\Request;

class StatutController extends Controller
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
    public function show(Statut $statut)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statut $statut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statut $statut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statut $statut)
    {
        //
    }

    public function showAll()
    {
        $statuts = Statut::all();
        return response()->json($statuts);
    }

    public function lightShow()
    {
        $statuts = Statut::where('nom', '!=', 'Archivé')->get()->map(function ($statut) {
            return [
                "id" => $statut->id,
                "nom" => $statut->nom,
            ];
        });

        return response()->json($statuts);
    }

    public function adminShow()
    {
        $statuts = Statut::all()->map(function ($statut) {
            return [
                "id" => $statut->id,
                "nom" => $statut->nom,
            ];
        });

        return response()->json($statuts);
    }

    public function adminUpdate(Request $request)
    {
        $statut = null;

        if ($request->id == "new") {
            $statut = new Statut();
        } else {
            $statut = Statut::find($request->id);
        }

        $statut->nom = $request->nom;
        $statut->save();

        return response()->json($statut);
    }

    public function adminDelete(Request $request)
    {
        $new_statut = Statut::find($request->newId);
        $old_statut = Statut::find($request->oldId);

        $actifs = Actif::where('id_statut', $old_statut->id)->get();
        if ($actifs->count() > 0) {
            $actifs->each(function ($actif) use ($new_statut) {
                $actif->id_statut = $new_statut->id;
                $actif->save();
            });
        }

        $old_statut->delete();

        return response()->json("ok");
    }
}
