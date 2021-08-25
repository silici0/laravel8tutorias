<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

Route::view('/', 'welcome');
Route::view('contato', 'contato');
Route::view('sobre', 'sobre');

Route::get('clientes', [ClientesController::class, 'list']); 