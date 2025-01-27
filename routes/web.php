<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\NoticiaFilmeController;
use App\Http\Controllers\NoticiafamososController; 
use App\Models\actor;
use App\Models\Film;
Use App\Models\series;
use App\Models\apload;
use App\Models\noticiafamosos;
use App\Models\noticiaFilme;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Jetstream\Rules\Role;
use Psy\CodeCleaner\ReturnTypePass;

Route::get('/filmes', function () {
    $films = Film::all();
    return view('films.Filmdex', compact('films'));
});

Route::get('Lancamento', function () {
    $films = Film::all();
    return view('films.Lancamento', compact('films'));
});


Route::get('/atores', function () {
    $actor = actor::all();
    return view('actor.Atordex',compact('actor'));
});

Route::get('/series',function(){
    $series = series::all();
    return view('series.Seridex',compact('series'));
});

Route::get('/Lançamentos',function(){
    $noticiaFilme = noticiaFilme::all();
    return view('NoticiaFilme.NoticiaFilmDex',compact('noticiaFilme'));
});

Route::get('/noticias',function(){
    $noticiaFamosos = noticiafamosos::all();
    return view('NoticiaFamosos.NoticiaFamososDex',compact('noticiaFamosos'));
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/filmes/{slug}', function ($slug) {
    $film = Film::where('slug', $slug)->first();
    return view('films.MovieShow', compact('film'));
});

Route::get('/atores/{slug}', function ($slug) {
    $ator = actor::where('slug', $slug)->first();    
    return view('actor.AtorShow', compact('ator'));
});

Route::get('/series/{slug}', function($slug){
    $series = series::where('slug',$slug)->first();
    return view('series.SeriesShow',compact('series'));
});

Route::get('Lançamentos/{slug}',function($slug){
    $noticiaFilme = noticiaFilme::where('slug',$slug)->first();
    return view('NoticiaFilme.NoticiaFilmShow',compact('noticiaFilme'));
});

Route::get('noticias/{slug}',function($slug){
    $noticiaFamosos = noticiafamosos::where('slug',$slug)->first();
    return view('NoticiaFamosos.NoticFamosoShow',compact('noticiaFamosos'));
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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

Route::get('nascimento',function(){
    $day = date("d");
    $month = date("m");
    $year = date("y");

    $dia = ($day);
    $mes = strval($month);
    $ano = strval($year);
    $calculo = ($dia + $mes + $ano);
    dd($dia);
    return view('actor.AtorShow');
});


Route::get('CaixaSurpresa', function () {


    $calculo = rand();
    $total = Film::count();

    $id = $calculo % $total + 1;

    $film = Film::find($id);    
    return view('films.MovieShow', compact(['film']));
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

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