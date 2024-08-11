<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/proyectos', ProyectoController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');
