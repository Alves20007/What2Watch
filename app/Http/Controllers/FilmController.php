<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\atores;
use App\Models\Film;
use App\Models\Ranking;

class FilmController extends Controller
{
    //

    public function primeiro()
    {
        $fims = Film::with('filmes')->get();
        // $actor = Atores::with('atores')->get();
        // return view('site.primeiro',compact('filmes','atores'));
        // return view('site.primeiro',compact('filmes','atores'));
    }

    public function showReviewForm(Film $film) {
        return view('films.review-form', compact('film'));
    }
    
    public function storeReview(Request $request, Film $film) {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);
    
        $film->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
    
        return redirect()->route('filmes', $film)->with('success', 'Review adicionada!');
    }

    public function top100()
    {
        $films = Film::withCount('reviews')
                    ->withAvg('reviews as average_rating', 'rating')
                    ->orderByDesc('average_rating')
                    ->orderByDesc('reviews_count')
                    ->take(100)
                    ->get();
    
        return view('films.top100', compact('films'));
    }

    

}
