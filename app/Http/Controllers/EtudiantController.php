<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$etudiants = Etudiant::all();
        //return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       /*  $villes = Ville::all();
        return view('users.create', ['villes' => $villes]); */

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        /* $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string',
            'telephone' => 'required',
            'email' => 'required|email',
            'date_de_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id'
        ]);

        $etudiant = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id        
        ]);

        return redirect()->route('users.show', $etudiant->id)->with('success', "L'étudiant a été ajouté avec succée."); */
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        /* return view('users.show', ['etudiant' => $etudiant]); */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        /* $villes = Ville::all();
        return view('users.edit', ['villes' => $villes, 'etudiant' => $etudiant]); */
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        /* $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string',
            'telephone' => 'required',
            'email' => 'required|email',
            'date_de_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id'
        ]);

        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id        
        ]);

        return redirect()->route('users.show', $etudiant->id)->with('success', "L'étudiant a été modifié avec succée."); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
       /*  $etudiant->delete();

        return redirect()->route('users.index')->with('success', "L'étudiant a été supprimé avec succée."); */
    }
}
