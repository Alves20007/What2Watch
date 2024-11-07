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

Route::get('Comedia', function () {
    return view('site.categorias.comedia');
});

Route::get('Drama', function () {
    return view('site.categorias.Drama');
});

Route::get('Documentario', function () {
    return view('site.categorias.Documentario');
});

Route::get('fantasia', function () {
    return view('site.categorias.fantasia');
});

Route::get('Fc', function () {
    return view('site.categorias.Fc');
});

Route::get('Guerra', function () {
    return view('site.categorias.Guerra');
});

Route::get('Musical', function () {
    return view('site.categorias.Musical');
});

Route::get('Romance', function () {
    return view('site.categorias.Romance');
});


Route::get('suspense', function () {
    return view('site.categorias.suspense');
});

Route::get('terror', function () {
    return view('site.categorias.terror');
});

Route::get('maca', function () {
    return view('site.categorias.maca');
});

Route::get('western', function () {
    return view('site.categorias.western');
});
