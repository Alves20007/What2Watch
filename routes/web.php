<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\NoticiaFilmeController;
use App\Http\Controllers\NoticiafamososController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\WatchlistController;
use App\Models\actor;
use App\Models\Film;
use App\Models\apload;
use App\Models\noticiafamosos;
use App\Models\noticiaFilme;
use App\Models\Image;
use App\Models\Premios;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Jetstream\Rules\Role;
use Psy\CodeCleaner\ReturnTypePass;


Route::get('/atores/aniversariantes', [ActorController::class, 'aniversariantesHoje'])->name('actor.Atordex');
Route::get('/ver-depois/{id}', [FilmController::class, 'marcarVerDepois'])->name('verDepois');

Route::middleware('auth')->get('/filmes/Ver/Mais/tarde', [WatchlistController::class, 'index'])->name('Watchlist.watchFilm');
Route::middleware('auth')->get('/serie/Ver/Mais/tarde', [WatchlistController::class, 'serie'])->name('Watchlist.watchSerie');
Route::middleware('auth')->get('/video/Ver/Mais/tarde', [WatchlistController::class, 'video'])->name('Watchlist.watchVideo');

Route::get('/filmes/{film}/review', [FilmController::class, 'showReviewForm'])->name('films.review.form');
Route::post('/filmes/{film}/review', [FilmController::class, 'storeReview'] )->name('films.review.store');

Route::post('/filmes/filter', [FilmController::class, 'filter'])->name('filmes.filter');
Route::post('/famosos/filter',[ActorController::class,'filter'])->name('famosos.filter');

Route::get('/top-100', [FilmController::class, 'top100'])->name('films.top100');

Route::get('/user/{id}/movies', [FilmController::class, 'getUserMovies'])->name('user.movies');

Route::get('/filmes', function () {

    $films = Film::where('tipo', 'filme')->get();
    return view('films.Filmdex', compact('films'));

})->name('filmes');


Route::get('/video/utilizador',function(){
    $films = Film::where('tipo','video')->get();
    return view('films.Filmdex',compact('films'));
});

Route::get('/series',function(){
    $films = Film::where('tipo','serie')->get();
    return view('films.Filmdex',compact('films'));
});


Route::get('Lancamento', function () {
    $films = Film::all();
    return view('films.Lancamento', compact('films'));
});


Route::get('/atores', function () {
    $actor = actor::all();
    return view('actor.Atordex',compact('actor'));
});

Route::get('/NoticiasFilmes',function(){
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


Route::get('/Oscares/artistas', function() {

    $actor = actor::where('Oscares', 'sim')->get();

    return view('actor.Atordex', compact('actor'));
});

Route::get('/noticias/oscares', function() {

    $actor = actor::where('Oscares', 'sim')->get();

    $film = Film::where('oscares', 'sim')->get();
    
    return view('actor.AtordexFilm', compact('actor' , 'film'));
});


Route::get('/noticias/premios', function() {
    
    $premiacao = Premios::all();

    return view('premios.premios', data: compact('premiacao'));
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



Route::post('/films/store', function (Request $request) {

    // Validação dos dados
    $request->validate([
        'title' => 'required|min:3',        
        'slug' => 'required',
        'image' => 'required|image|mimes:jpeg,png,gif,PNG|max:2048',
        'data' => 'min:3',
        'sinopse' => 'required|min:3',
        'tipo' => 'required|min:2',
        'description' => 'min:3',
        'Falas' => 'min:3',
        'trailer' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:100000',
        'categoria' => 'required|min:3', 
        'Temporadas' => 'min:1',
        'Episodios' => 'min:1'
    ]);

    //imagem e video
    $image = $request->file('image');
    $imageName = time() . '.' . $image->extension();     
    $request->image->move(public_path('images'), $imageName);

    $video = $request->file('trailer');
    $videoname = time() . '.' . $video->extension();     
    $video->move(public_path('video'), $videoname);

    //filme no banco de dados
    Film::create([
        'tipo' => $request->input('tipo'),
        'categoria' => $request->input('categoria'),
        'title' => $request->input('title'),
        'slug' => $request->input('slug'),
        'description' => $request->input('description'),     
        'Data' => $request->input('data'),
        'elenco' => $request->input('elenco'),
        'sinopse' => $request->input('sinopse'),
        'Falas' => $request->input('Falas'),
        'image' => $imageName,
        'trailer' => $videoname,
        'Temporadas' => $request->input('Temporadas'),
        'Episodios' =>$request->input('Episodios')
    ]);
    
    return redirect()->route('apload.filme.create')->with('banner', 'Filme criado com sucesso');
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::post('/apload/ator/store', function (Request $request) {
    $validated = $request->validate([
        'idade'=> 'min1',
        'birthday'=>'min:1',
        'Name'=> 'min:3',
        'Slug' => 'required'
    ]);

    $image = $request->file('image');
    $imageName = time() . '.' . $image->extension();     
    $request->image->move(public_path('images'), $imageName);

    $video = $request->file('trailer');
    $videoname = time() . '.' . $video->extension();     
    $video->move(public_path('video'), $videoname);

    actor::create([
        'birthday'=> $request->input('birthday'),
        'Name'=> $request->input('Name'),
        'idade'=> $request->input('idade'),
        'Slug' => $request->input('Slug')
,    ]);

    return redirect()->route('apload.ator.create2')->banner('Race created with success');
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


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////´

Route::middleware('auth')->group(function () {
    Route::post('/filmes/watch-later/add/{filmId}', [WatchlistController::class, 'add'])->name('filmes.watchlater.add');
    Route::delete('/filmes/watch-later/remove/{filmId}', [WatchlistController::class, 'remove'])->name('filmes.watchlater.remove');
    Route::get('/filmes/watch-later/list', [WatchlistController::class, 'list'])->name('filmes.watchlater.list');
});
