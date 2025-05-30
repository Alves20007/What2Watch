<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actor;
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
    public function show(Film $film)
    {
         $film->load(['rankings.user', 'actors', 'creator']);
         
        return view('films.show', compact('film'));
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
    

    public function index(Request $request)
    {
        $query = \App\Models\Film::query(); // Certifique-se de importar a model correta
    
        // Filtro por pesquisa de texto
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
    
        // Filtro por categorias selecionadas
        if ($request->filled('categoria')) {
            $query->whereIn('categoria', $request->categoria);
        }
    
        $films = $query->get();
    
        return view('filmes', compact('films'));
    }
    
    public function search(Request $request)
    {
        $films = \App\Models\Film::where('title', 'like', '%' . $request->s . '%')->take(5)->get();
        return response()->json($films);
    }

    
   public function filter(Request $request)
    {
        $query = Film::query();

        if ($request->has('categorias') && is_array($request->categorias) && count($request->categorias)) {
            $query->where(function ($q) use ($request) {
                foreach ($request->categorias as $categoria) {
                    $q->orWhereJsonContains('categoria', $categoria)
                    ->orWhere('categoria', 'like', '%"' . $categoria . '"%')
                    ->orWhere('categoria', $categoria);
                }
            });
        }

        if ($request->has('tipos') && is_array($request->tipos) && count($request->tipos)) {
            $query->whereIn('tipo', $request->tipos);
        }

        if ($request->has('CE') && is_array($request->CE) && count($request->CE)) {
            $query->whereIn('CE', $request->CE);
        }

        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $films = $query->get();

        $html = view('films.partials.grid', compact('films'))->render();

        return response()->json(['html' => $html]);
    }
    public function index2()
    {
        $films = Film::where('escolhido', 'SIM')->get();
        return view('films.Filmdex', compact('films'));
    }


    public function create()
    {
        $actors = actor::all();
        return view('apload.filme.create', compact('actors'));
    }
}
