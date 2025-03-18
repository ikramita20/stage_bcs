<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stagiaire;

class StagiaireController extends Controller
{
    public function index(Request $request)
    {
        $query = Stagiaire::query();

        if ($request->has('cin')) {
            $query->where('cin', 'like', '%' . $request->cin . '%');
        }

        $stagiaires = $query->get();
        return view('dashboard', compact('stagiaires'));
    }

    public function create()
    {
        return view('stagiaire.ajouter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'cin' => 'required|string|max:10|unique:stagiaires',
            'date_inscription' => 'required|date',
            'date_naissance' => 'required|date',
            'telephone' => 'required|string|max:15',
            'filiere' => 'required|string',
            'date_depart' => 'required|date',
            'date_fin' => 'required|date',
            'annee_scolaire' => 'required|integer',
            'note_deplome' => 'nullable|numeric',
            'statut' => 'required|in:admis,non admis',
        ]);

        Stagiaire::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Stagiaire ajouté avec succès !');
    }
}