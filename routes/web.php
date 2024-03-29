<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ParentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, "login"])->name("login");
Route::post('/login', [AuthController::class, "authenticate"])->name("authenticate");
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::post('/eleves/search', [EleveController::class, 'search'])->name('eleves.search');
    Route::post('/enseignants/search', [EnseignantController::class, 'search'])->name('enseignants.search');

    Route::resource("/eleves", EleveController::class);
    Route::resource("/enseignants", EnseignantController::class);
    Route::resource("/groupes", GroupeController::class);
    Route::resource("/classes", ClasseController::class);
    Route::resource("/matieres", MatiereController::class);
    Route::resource("/notes", NoteController::class);
    Route::resource("/parents", ParentController::class);

    Route::get('/account/info', [AccountController::class, 'index'])->name('account.info');
    Route::post('/account/password', [AccountController::class, 'updatePassword'])->name('account.password');
});
