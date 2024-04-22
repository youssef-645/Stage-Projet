<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        $examens = Examen::where('nom', 'like', "%$query%")
            ->get();

        return view('examens.index', compact('examens'));
    }
    public function index()
    {
        $examens = Examen::orderBy('created_at', 'desc')->paginate(10);
        return view('examens.index', compact('examens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('examens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Examen::create($request->all());
        return redirect()->route('examens.index')->with('success', 'Examen créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Examen $examen)
    {
        return view('examens.show', compact('Examen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Examen $examen)
    {
        return view('examens.edit', compact('Examen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Examen $examen)
    {
        $examen->update($request->all());
        return redirect()->route('examens.index')->with('success', 'Examen mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Examen $examen)
    {
        $examen->delete();
        return redirect()->route('examens.index')->with('success', 'Examen supprimée avec succès.');
    }
}
