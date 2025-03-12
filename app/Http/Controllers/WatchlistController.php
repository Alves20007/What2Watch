<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WatchlistController extends Controller
{
    // Adicionar vídeo ao Watch Later
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
        }

        return response()->json(['message' => 'Adicionado ao Watch Later']);
    }

    // Remover vídeo do Watch Later
    public function remove($filmId)
    {
        Watchlist::where('user_id', Auth::id())
                  ->where('film_id', $filmId)
                  ->delete();

        return response()->json(['message' => 'Removido do Watch Later']);
    }

    // Listar vídeos do Watch Later
    public function list()
    {
        $watchLater = Watchlist::where('user_id', Auth::id())->with('films')->get();

        return response()->json($watchLater);
    }
}
