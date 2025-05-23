<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\NoticiaFilmeController;
use App\Http\Controllers\NoticiafamososController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WatchlistController;
use App\Models\actor;
use App\Models\Film;
use App\Models\apload;
use App\Models\noticiafamosos;
use App\Models\noticiaFilme;
use App\Models\Image;
use App\Models\Premios;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Jetstream\Rules\Role;
use Psy\CodeCleaner\ReturnTypePass;


Auth::loginusingid(1);

Route::get('/atores/aniversariantes', [ActorController::class, 'aniversariantesHoje'])->name('actor.Atordex');
Route::get('/ver-depois/{id}', [FilmController::class, 'marcarVerDepois'])->name('verDepois');
Route::get('CriacaoFilmes', [FilmController::class, 'create'])->name('apload.filme.create');
 
Route::middleware('auth')->get('/filmes/Ver/Mais/tarde', [WatchlistController::class, 'index'])->name('Watchlist.watchFilm');
Route::middleware('auth')->get('/serie/Ver/Mais/tarde', [WatchlistController::class, 'serie'])->name('Watchlist.watchSerie');
Route::middleware('auth')->get('/video/Ver/Mais/tarde', [WatchlistController::class, 'video'])->name('Watchlist.watchVideo');

Route::middleware(['auth'])->group(function () {
    Route::get('/meu-perfil', [ProfileController::class, 'index'])->name('profile');
});

Route::get('/filmes/{film}/review', [FilmController::class, 'showReviewForm'])->name('films.review.form');
Route::post('/filmes/{film}/review', [FilmController::class, 'storeReview'] )->name('films.review.store');

Route::post('/filmes/filter', [FilmController::class, 'filter'])->name('filmes.filter');
Route::post('/actor/filter', [ActorController::class, 'filter'])->name('actor.filter');
Route::post('/filmes/filter-escolhido', [FilmController::class, 'filtrarescolhido'])->name('filmes.filter.escolhido');

Route::get('/top-100', [FilmController::class, 'top100'])->name('films.top100');

Route::get('/user/{id}/movies', [FilmController::class, 'getUserMovies'])->name('user.movies');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/filmes/{slug}', [FilmController::class, 'show'])->name('filmes.show');

Route::get('/actor/{slug}', [ActorController::class, 'show'])->name('actors.show');

Route::get('/api/actors', function () {
    return \App\Models\Actor::select('id', 'FullName', 'image')->get();
});



Route::get('/filmes', function () {

    $films = Film::all();
    return view('films.Filmdex', compact('films'));

})->name('filmes');


Route::get('/video/utilizador',function(){
    $films = Film::where('tipo','video')->get();
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

Route::get('/premios/{slug}', function ($slug) {
    $film = Premios::where('slug', $slug)->first();
    return view('premios.premiosShow', compact('film'));
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

    // $banner = $request->file('banner');
    // $banner = time() . '.' . $banner->extension();     
    // $request->banner->move(public_path('banner'), $banner);

    $video = $request->file('trailer');
    $videoname = time() . '.' . $video->extension();     
    $video->move(public_path('video'), $videoname);

    $validatedData['criador'] = auth()->id();

    
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
        'Episodios' =>$request->input('Episodios'),
        'criador' => $validatedData['criador']
    ]);
    
    return redirect()->route('apload.filme.create')->with('banner', 'Filme criado com sucesso');
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::post('/actor/store', function (Request $request) {
    $request->validate([
        'birthday' => 'required|date',
        'Name' => 'required|string|min:3',
        'Slug' => 'required|string',
        'Falas' => 'required|string|min:1',
        'sexo' => 'required|string',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'bio' => 'nullable|string',
    ]);

    // Upload da imagem
    $image = $request->file('image');
    $imageName = time() . '.' . $image->extension();
    $image->move(public_path('images'), $imageName);

    // Criação do ator
    Actor::create([
        'Name' => $request->input('Name'),
        'Slug' => $request->input('Slug'),
        'sexo' => $request->input('sexo'),
        'idade' => $request->input('idade'),
        'birthday' => $request->input('birthday'),
        'Frase' => $request->input('Falas'),
        'bio' => $request->input('bio'),
        'image' => $imageName,
    ]);
    

    return redirect()->route('apload.ator.create2')->with('success', 'Ator criado com sucesso!');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/perfil', function () {
            return view('perfil', ['user' => Auth::user()]);
        })->name('perfil');

        // Página para editar o perfil (perfil-remake.blade.php)
        Route::get('/editar-perfil', function () {
            return view('perfil-remake', ['user' => Auth::user()]);
        })->name('perfil.edit');

        // Atualizar perfil do usuário
        Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');
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
