<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/primeiro', function () {
    return view('site.primeiro');
});

Route::get('/footer', function () {
    return view('site.footer');
});

Route::get('/header', function () {
    return view('site.header');
});

Route::get('acao', function () {
    return view('site.categorias.acao');
});

Route::get('aventura', function () {
    return view('site.categorias.aventura');
});

Route::get('animacao', function () {
    return view('site.categorias.animacao');
});

Route::get('comedia', function () {
    return view('site.categorias.comedia');
});

