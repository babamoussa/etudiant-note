<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("insertionNote", [ProjetController::class, "insertionNote"]);
Route::get("etudiantNote", [ProjetController::class, "etudiantNote"]);
Route::get("listeEtudiant", [ProjetController::class, "listeEtudiant"]);
Route::post("insertionNote", [ProjetController::class, "storeNote"]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
