<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/retos-naturales', function () {
    return view('retos');
})->name('retos');

Route::get('/laboratorio-materia', function () {
    return view('retos');
});

Route::get('/actividad-2-esquema', function () {
    return view('actividad2');
})->name('actividad2');

Route::get('/tareas-materia', function () {
    return view('tareas');
})->name('tareas');
