<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eleves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string',
            'email' => 'required|email|unique:eleves,email',
            'groupe_id' => 'required|exists:groupes,id',
            'parente_id' => 'required|exists:parentes,id',
        ]);

        Eleve::create($request->all());

        return redirect()->route('eleves.index')->with('success', 'Eleve created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        return view('eleves.show', compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        return view('eleves.edit', compact('eleve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
        // Validation
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string',
            'email' => 'required|email|unique:eleves,email,' . $eleve->id,
            'groupe_id' => 'required|exists:groupes,id',
            'parente_id' => 'required|exists:parentes,id',
        ]);

        $eleve->update($request->all());

        return redirect()->route('eleves.index')->with('success', 'Eleve updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return redirect()->route('eleves.index')->with('success', 'Eleve deleted successfully.');
    }

    /**
     * Search for eleves by name or surname or both.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Eleve::where('nom', 'like', "%$query%")
            ->orWhere('prenom', 'like', "%$query%")
            ->get();

        return response()->json($results);
    }
}
