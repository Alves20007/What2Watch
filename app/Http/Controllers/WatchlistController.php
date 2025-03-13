<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WatchlistController extends Controller
{
    public function add($filmId)
    {
        $exists = Watchlist::where('user_id', Auth::id())
                           ->where('film_id', $filmId)
                           ->exists();
    
        if (!$exists) {
            Watchlist::create([
                'user_id' => Auth::id(),
                'film_id' => $filmId
            ]);
    
            return response()->json(['message' => 'Adicionado ao Watch Later']);
        } else {
            return response()->json(['message' => 'Já está na Watch Later!']);
        }
    }
        
    // Listar vídeos do Watch Later
    public function list()
    {
        $watchLater = Watchlist::where('user_id', Auth::id())->with('films')->get();

        return response()->json($watchLater);
    }
    public function index()
    {
        $watchLaterFilmIds = Watchlist::where('user_id', Auth::id())->pluck('film_id');
        $films = Film::whereIn('id', $watchLaterFilmIds)->where('tipo','filme')->get();

        return view('Watchlist.watchFilm', compact('films'));
    }

    public function serie()
    {
        $watchLaterFilmIds = Watchlist::where('user_id', Auth::id())->pluck('film_id');
        $serie = Film::whereIn('id', $watchLaterFilmIds)->where('tipo','serie')->get();

        return view('Watchlist.watchSerie', compact('serie'));
    }

    public function video()
    {
        $watchLaterFilmIds = Watchlist::where('user_id', Auth::id())->pluck('film_id');
        $video = Film::whereIn('id', $watchLaterFilmIds)->where('tipo','video')->get();

        return view('Watchlist.watchVideo', compact('video'));
    }
}
