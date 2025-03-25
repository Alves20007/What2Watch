<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;
use App\Models\Rankingy;
use Illuminate\Support\Facades\Auth;

class RankingController extends Controller
{
    // Mostrar o formulário com o ID do produto ou item a ser avaliado
    // public function showForm($id)
    // {
    //     return view('review.form', compact('id'));
    // }

    // // Guardar a avaliação no banco de dados
    // public function submitReview(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|integer',
    //         'rating' => 'required|integer|min:1|max:5',
    //         'comment' => 'nullable|string',
    //     ]);

    //     Ranking::create([
    //         'user_id' => Auth::id(), // Captura o ID do usuário autenticado
    //         'product_id' => $request->product_id,
    //         'rating' => $request->rating,
    //         'comment' => $request->comment,
    //     ]);

    //     return redirect()->route('home')->with('success', 'Avaliação enviada com sucesso!');
    // }

    public function create($film_id)
    {
        return view('films.rank', compact('film_id'));
    }
}
