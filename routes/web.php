<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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


// PAGE D'ACCUEIL
Route::get('/', function () {
    return view('welcome');
})->name('home');

// LISTE ÉTUDIANTS
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');

// ÉTUDIANT
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');

// FORMULAIRE D'AJOUT ÉTUDIANT
route::get('/create/etudiant', [EtudiantController::class, 'create'])->name('etudiant.create');

// STORE
route::post('/create/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');

// EDIT ETUDIANT
route::get('/edit/etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');

// UPDATE ETUDIANT
Route::put('/edit/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');

// DELETE ETUDIANT
Route::delete('/etudiant/{etudiant}', [ EtudiantController::class, 'destroy'])->name('etudiant.destroy');
