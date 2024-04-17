<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Groupe;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $groupes = Groupe::all();
        $query = Eleve::query();

        if ($request->filled('groupe')) {
            $query->where('groupe_id', $request->input('groupe'));
        }


        if ($request->filled('id')) {
            $query->where('id', $request->input('id'));
        }

        $eleves = $query->paginate(10);

        return view('eleves.index', compact('eleves', 'groupes'));
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
    public function show($id)
    {
        $eleve = Eleve::findOrFail($id);
        return view('eleves.show', compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $eleve = Eleve::findOrFail($id);
        $groupes = Groupe::all();
        return view('eleves.edit', compact('eleve', 'groupes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $eleve = Eleve::findOrFail($id);

        // Validation
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string',
            'email' => 'required|email'
            // 'groupe_id' => 'required|exists:groupes,id',
            // 'parente_id' => 'required|exists:parentes,id',
        ]);

        // Update only the fields present in the request
        $eleve->update($request->all());


        return redirect()->route('eleves.index')->with('success', 'Eleve updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();
        return redirect()->route('eleves.index')->with('success', 'Élève supprimé.');
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
