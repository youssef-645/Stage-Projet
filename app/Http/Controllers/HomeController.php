<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Enseignant;
use App\Models\Matiere;
use App\Models\Note;

class HomeController extends Controller
{
    function dashboard()
    {
        $classCount = Classe::count();
        $enseignantCount = Enseignant::count();
        $matiereCount = Matiere::count();
        $noteCount = Note::count();

        return view('index', compact('classCount', 'enseignantCount', 'matiereCount', 'noteCount'));
    }
}
