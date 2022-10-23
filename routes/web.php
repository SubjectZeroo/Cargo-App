<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\ServiceController;
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
    return view('principal.index');
})->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('tarifas', [RateController::class, 'index'])->name('tarifas');

Route::get('contacto', [ContactController::class, 'index'])->name('contacto');

Route::get('servicios', [ServiceController::class, 'index'])->name('servicios');

require __DIR__.'/auth.php';
