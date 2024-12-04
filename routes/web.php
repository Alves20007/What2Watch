<?php

use App\Models\atores;
use App\Models\Film;
use Illuminate\Support\Facades\Route;

Route::get('/filmes', function () {
    $films = Film::all();
    return view('films.Filmdex', compact('films'));
});

Route::get('/filmes/{slug}', function ($slug) {
    $film = Film::where('slug', $slug)->first();    
    return view('films.MovieShow', compact('film'));
});

Route::get('/atores', function () {
    $atores = Atores::all();
    return view('actor.Atordex',compact('atores'));
});


Route::get('/atores/{slug}', function ($slug) {
    $ator = Film::where('slug', $slug)->first();    
    return view('actor.AtorShow', compact('ator'));
});


Route::get('/', function () {

    $day = date("d");
    $month = date("m");
    $year = date("y");

    $calculo = ($day + $month + $year) * $day ;
    $total = Film::count();

    $id = $calculo % $total + 1;

    $film = Film::find($id);    
    return view('site.primeiro', compact(['film']));
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

//Route::get('/primeiro', function () {
    //  return view('site.primeiro');
//});

Route::get('/footer', function () {
    return view('site.footer');
});

Route::get('/header', function () {
    return view('site.header');
});



Route::get('teste', function () {
    return view('site.teste');
});

Route::get('teste2', function () {
    return view('site.teste2');
});

