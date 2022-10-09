<?php

use App\Http\Controllers\AffectationController;
use App\Http\Controllers\PiloteController;
use App\Http\Controllers\VolController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('base');
});

Route::get('pilote', [PiloteController::class, 'index'])->name('pilote');
Route::get('vol', [VolController::class, 'index'])->name('vol');

Route::get('affectation', [AffectationController::class, 'index'])->name('affectation');
Route::get("/affectation/create", [AffectationController::class, "create"])->name('create_affectation');
Route::post("/affectation/create", [AffectationController::class, "store"])->name('add_affectation');
Route::delete("/affectation/{affectation}", [AffectationController::class, "delete"])->name('delete_affectation');
Route::put("/affectation/{affectation}", [AffectationController::class, "update"])->name('update_affectation');
Route::get("/affectation/{affectation}", [AffectationController::class, "edit"])->name('edit_affectation');
