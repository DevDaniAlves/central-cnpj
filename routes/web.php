<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

Route::inertia('/', 'welcome')->name('home');

Route::get('/cnpj', 'EmpresaController::index',{id?})