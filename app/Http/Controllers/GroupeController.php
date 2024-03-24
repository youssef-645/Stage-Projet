<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $groupes = Groupe::all();
        return view('groupes.index', compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|unique:groupes',
            'anne_scholaire' => 'required'
        ]);


        Groupe::create($request->all());


        return redirect()->route('groupes.index')->with('success', 'Groupe créé avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $groupe = Groupe::findOrFail($id);
        return view('groupes.show', compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $groupe = Groupe::findOrFail($id);
        return view('groupes.edit', compact('groupe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nom' => 'required|unique:groupes,nom,' . $id,
            'anne_scholaire' => 'required'
        ]);


        $groupe = Groupe::findOrFail($id);
        $groupe->update($request->all());


        return redirect()->route('groupes.index')->with('success', 'Groupe mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $groupe = Groupe::findOrFail($id);
        $groupe->delete();


        return redirect()->route('groupes.index')->with('success', 'Groupe supprimé avec succès!');
    }
}
