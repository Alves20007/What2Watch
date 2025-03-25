<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;
use App\Models\Rankingy;
use Illuminate\Support\Facades\Auth;

class RankingController extends Controller
{
    public function create($film_id)
    {
        return view('films.rank', compact('film_id'));
    }

    public function userRankings($userId)
    {
        $films = Ranking::where('user_id', $userId)
            ->with('film') // Carrega os dados do filme
            ->get()
            ->pluck('film') // Obtém apenas os filmes
            ->unique(); // Remove duplicatas caso existam múltiplas avaliações no mesmo filme
    
        return view('films.avaliacao', compact('films'));
    }
}
