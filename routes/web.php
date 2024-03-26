<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\MediaController;

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


/********************/

Route::middleware('auth')->group(function() {

    // LISTE USERS
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    // USER
    Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
    // EDIT USER
    route::get('/edit/user/{user}', [UserController::class, 'edit'])->name('user.edit');
    // UPDATE USER
    Route::put('/edit/user/{user}', [UserController::class, 'update'])->name('user.update');
    // DELETE USER
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');


    // FORM NEW ARTICLE //
    Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');
    // STORE ARTICLE
    Route::post('/forum/store', [ForumController::class, 'store'])->name('forum.store');
    // LISTE ARTICLES //
    Route::get('/forum/index', [ForumController::class, 'index'])->name('forum.index');
    // FORM EDIT ARTICLE //
    Route::get('/forum/edit/{forum}', [ForumController::class, 'edit'])->name('forum.edit');
    // UPDATE ARTICLE //
    Route::put('/forum/edit/{forum}', [ForumController::class, 'update'])->name('forum.update');
    // DELETE ARTICLE//
    Route::delete('/forum/{forum}', [ForumController::class, 'destroy'])->name('forum.destroy');


    // FORM NEW FILE //
    Route::get('/media/create', [MediaController::class, 'create'])->name('media.create');
    // STORE FILE //
    Route::post('/media/store', [MediaController::class, 'store'])->name('media.store');
    // LISTE FILES //
    Route::get('/media/index', [MediaController::class, 'index'])->name('media.index');
    // DELETE FILE //
    Route::delete('/media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');
});


// FORM NEW USER //
route::get('/registration', [UserController::class, 'create'])->name('user.create');
// STORE USER //
route::post('/registration', [UserController::class, 'store'])->name('user.store');


// FORM LOGIN //
Route::get('/login', [AuthController::class, 'create'])->name('login');
// STORE LOGIN //
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
// LOGOUT //
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');


// LANG //
Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');


// FORM FORGOT PASSWORD //
Route::get('/password/forgot', [UserController::class, 'forgot'])->name('password.forgot');
// SEND EMAIL //
Route::post('/password/forgot', [UserController::class, 'mail'])->name('password.mail');
// RESET PASSWORD //
Route::post('/password/reset/{user}/{token}', [UserController::class, 'reset'])->name('password.reset');


