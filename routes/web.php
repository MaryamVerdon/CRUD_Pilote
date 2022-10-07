<?php

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
