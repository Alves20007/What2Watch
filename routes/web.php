<?php

use App\Http\Controllers\AtoresController;
use App\Http\Controllers\FilmController;
use App\Models\atores;
use App\Models\Film;
use App\Models\apload;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Jetstream\Rules\Role;
use Psy\CodeCleaner\ReturnTypePass;

Route::get('/filmes', function () {
    $films = Film::all();
    return view('films.Filmdex', compact('films'));
});


Route::get('/series', function () {
    $films = Film::all();
    return view('Series.112', compact('series'));
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


Route::get('films',[FilmController::class,'site.primeiro']);

Route::get('atores',[AtoresController::class,'site.primeiro']);

Route::get('/', function () {

    $day = date("d");
    $month = date("m");
    $year = date("y");

    $calculo = ($day + $month + $year) * $day ;
    $total = Film::count();

    $id = $calculo % $total + 1;

    $film = Film::find($id);    
    return view('primeiro', compact(['film']));
});



Route::get('/apload/create', function () {
    return view('apload.create');
});



Route::get('/apload/create2', function (){
    return view('apload.create2');
});
Route::get('/apload/store',function(){
    return view('apload.store');
});

Route::get('/apload/Ownfilm',function(){
    return view('apload.Ownfilm');
});

Route::post('/apload/store', function (Request $request) {

    $validated = $request->validate([
        'name' => 'required|min:3',        
        'slug' => 'required',
        'image' => 'image',
        'description' => 'min:3'
    ]);

    Apload::create([
        'name' => $request->input('name'),
        'slug' => $request->input('slug'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
    ]);

    return view('apload.store');
});

Route::get('/apload', function () {
    return view('apload');
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



// Route::get('/categories', function () {
//     $categories = Category::all();    
//     return view('categories.index', compact('categories'));
// });