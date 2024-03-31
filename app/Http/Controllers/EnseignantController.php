<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function index()
    {
        $enseignants = Enseignant::with('matieres')->paginate(10);
        return view('enseignants.index', compact('enseignants'));
    }

    public function create()
    {
        return view('enseignants.create');
    }

    public function store(Request $request)
    {
        // Validation logic here
        Enseignant::create($request->all());
        return redirect()->route('enseignants.index');
    }

    public function show(Enseignant $enseignant)
    {
        return view('enseignants.show', compact('enseignant'));
    }

    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.edit', compact('enseignant'));
    }

    public function update(Request $request, Enseignant $enseignant)
    {
        // Validation logic here
        $enseignant->update($request->all());
        return redirect()->route('enseignants.index');
    }

    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();
        return redirect()->route('enseignants.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $enseignants = Enseignant::where('nom', 'like', "%$query%")
            ->orWhere('prenom', 'like', "%$query%")
            ->get();

        return view('enseignants.index', compact('enseignants'));
    }
}
