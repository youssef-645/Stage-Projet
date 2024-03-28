<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {

        $admin = auth()->user();
        if ($admin) {

            return view('admin.info', compact('admin'));
        } else {

            return redirect()->back()->with('error', 'not found.');
        }
    }
}
