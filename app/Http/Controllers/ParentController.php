<?php

namespace App\Http\Controllers;

use App\Models\Parente;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = Parente::all();
        return view('parents.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Parente::create($request->all());
        return redirect()->route('parents.index')->with('success', 'Parent créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Parente $parent)
    {
        return view('parents.show', compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parente $parent)
    {
        return view('parents.edit', compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parente $parent)
    {
        $parent->update($request->all());
        return redirect()->route('parents.index')->with('success', 'Parent mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parente $parent)
    {
        $parent->delete();
        return redirect()->route('parents.index')->with('success', 'Parent supprimé avec succès.');
    }
}
