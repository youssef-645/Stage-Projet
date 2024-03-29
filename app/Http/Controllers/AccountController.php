<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        if ($user) {

            return view('account.info', compact('user'));
        } else {

            return redirect()->back()->with('error', 'not found.');
        }
    }

    public function updatePassword(Request $request)
    {
        $idUtilisateurConnecte = auth()->user()->id;

        $utilisateur = User::findOrFail($idUtilisateurConnecte);

        $donneesValidees = $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($donneesValidees['old_password'], $utilisateur->password)) {
            return redirect()->back()->with('error', 'Ancien mot de passe incorrect');
        }

        $utilisateur->update([
            'password' => Hash::make($donneesValidees['password'])
        ]);

        return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès');
    }
}
