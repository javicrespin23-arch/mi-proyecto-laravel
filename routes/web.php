<?php

use Illuminate\Support\Facades\Route;

// Ruta 1: Inicio
Route::get('/', function () {
    return view('inicio');
});

// Ruta 2: Nosotros (pasando datos dinámicos)
Route::get('/nosotros', function () {
    return view('nosotros', ['usuario' => 'Desarrollador Laravel']);
});