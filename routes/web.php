<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\NoticiaFilmeController;
use App\Http\Controllers\NoticiafamososController;
use App\Http\Controllers\ImageController;
use App\Models\actor;
use App\Models\Film;
Use App\Models\series;
use App\Models\apload;
use App\Models\noticiafamosos;
use App\Models\noticiaFilme;
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Jetstream\Rules\Role;
use Psy\CodeCleaner\ReturnTypePass;

Route::get('/filmes', function () {

    $films = Film::where('tipo', 'filme')->get();
    return view('films.Filmdex', compact('films'));

});

Route::get('Lancamento', function () {
    $films = Film::all();
    return view('films.Lancamento', compact('films'));
});

Route::get('/series',function(){
    $films = Film::where('tipo','serie')->get();
    return view('films.Filmdex',compact('films'));
});

Route::get('/atores', function () {
    $actor = actor::all();
    return view('actor.Atordex',compact('actor'));
});

Route::get('/Lançamentos',function(){
    $noticiaFilme = noticiaFilme::all();
    return view('NoticiaFilme.NoticiaFilmDex',compact('noticiaFilme'));
});

Route::get('/noticias',function(){
    $noticiaFamosos = noticiafamosos::all();
    return view('NoticiaFamosos.NoticiaFamososDex',compact('noticiaFamosos'));
});

Route::get('/TOP100', function() {

    $films = Film::where('top100', 'sim')->get();
    
    return view('films.Filmdex', compact('films'));
});


Route::get('/escolhido', function() {

    $films = Film::where('escolhido', 'sim')->get();
    
    return view('films.Filmdex', compact('films'));
});


Route::get('/Oscares', function() {

    $actor = actor::where('Oscares', 'sim')->get();
    
    return view('actor.Atordex', compact('actor'));
});


Route::get('/top', function() {

    $actor = actor::where('Top', 'sim')->get();
    
    return view('actor.Atordex', compact('actor'));
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
    $films = Film::where('slug',$slug)->first();
    return view('films.Filmdex',compact('films'));
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
    $calculo = (($dia * 31) + ($mes * 12) + ($ano * 365));
    dd($calculo);
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

Route::get('/apload', function () {
    return view('apload');
});


Route::get('/apload/filme/store',function(){
    return view('apload.filme.store');
    
});

Route::get('CriacaoFilmes', function () {
    return view(view: 'apload.filme.create');
})->name('apload.filme.create');


////
Route::get('/apload/ator/store',function(){
    return view('apload.ator.store');
});


Route::get('CriarCelebs', function (){
    return view('apload.ator.create2');
})->name('apload.ator.create2');

/////

Route::get('Users',function(){
    return view('apload.Own.Ownfilm');
});

Route::get('Own Movie', function (){
    return view('apload.Own.OwnFilm');
})->name('apload.Own.OwnFilm');



Route::post('/apload/filme/store', function (Request $request) {

    // dd($request->all());
    // $imageName = time() . "." . $request->image->extension();
    // $request->image->move(public_path('images'), $imageName);

    
    $validated = $request->validate([
        'title' => 'required|min:3',        
        'slug' => 'required',
        'image' => 'image',
        'data'=> 'min:3',
        'elenco'=> 'required|min:3',
        'sinopse'=>'required|min:3',
        'tipo'=> 'required|min:2',
        'description' => 'min:3',
        'Falas'=>'min:3',
        'categoria'=> 'required|min:3'

    ]);
    Film::create([
        'tipo'=> $request->input('tipo'),
        'categoria'=> $request->input('categoria'),
        'title' => $request->input('title'),
        'slug' => $request->input('slug'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
        'Data'=> $request->input('Data'),
        'trailer'=> $request->input('trailer'),
        'elenco'=> $request->input('elenco'),
        'sinopse'=> $request->input('sinopse'),
        'Falas'=> $request->input('Falas')
    ]);
    
    // Image::create([
    //     'name' => $request['name'],
    //     'path' => $imageName
    // ]);
    

    return redirect()->route('apload.filme.create')->banner('Race created with success');
});



Route::post('/apload/ator/store', function (Request $request) {
    $validated = $request->validate([
        'idade'=> 'min1',
        'birthday'=>'min:1',
        'Name'=> 'min:3',

    ]);
    actor::create([
        'birthday'=> $request->input('birthday'),
        'Name'=> $request->input('Name'),
        'idade'=> $request->input('idade'),
    ]);

    return redirect()->route('apload.ator.create2')->banner('Race created with success');
});



Route::post('/apload/Own/store', function (Request $request) {
    $validated = $request->validate([
        'title' => 'required|min:3',        
        'slug' => 'required',
        'image' => 'image',
        'data'=> 'min:3',
        'elenco'=> 'required|min:3',
        'sinopse'=>'required|min:3',
        'description' => 'min:3',
        'Falas'=>'min:3',

    ]);

    Film::create([
        'title' => $request->input('title'),
        'slug' => $request->input('slug'),
        'description' => $request->input('description'),
        'image' => $request->input('image'),
        'Data'=> $request->input('Data'),
        'trailer'=> $request->input('trailer'),
        'elenco'=> $request->input('elenco'),
        'sinopse'=> $request->input('sinopse'),
        'Falas'=> $request->input('Falas'),
    ]);


    return redirect()->route('apload.Own.OwnFilm')->banner('Race created with success');
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


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::post('/image_upload/store', function (Request $request) {    
    $request->validate([
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png|max:2048'
    ]);
    $imageName = time() . "." . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);
    Image::create([
        'name' => $request['name'],
        'path' => $imageName
    ]);
    return redirect('/');
});



// Route::get('/categories', function () {
//     $categories = Category::all();    
//     return view('categories.index', compact('categories'));
// });