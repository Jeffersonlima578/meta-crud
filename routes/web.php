<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [ClienteController::class, 'index']);
Route::resource('clientes', ClienteController::class);

Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
