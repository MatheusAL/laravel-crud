<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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

Route::get('', function () {
    return view('homepage');
})->name('homepage.index');

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::post('/clients/create', [ClientController::class, 'store'])->name('clients.store');

Route::get('/clients/search', [ClientController::class, 'search'])->name('clients.search');

Route::post('/clients/get', [ClientController::class, 'get'])->name('clients.get');

Route::delete('/clients/delete/{client}', [ClientController::class, 'delete'])->name('clients.delete');