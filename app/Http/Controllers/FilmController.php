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
        $film->load(['rankings.user', 'actors']);

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

        if ($request->has('categorias') && !empty($request->categorias)) {
            $query->whereIn('categoria', $request->categorias);
        }

        if ($request->has('tipos') && !empty($request->tipos)) {
            $query->whereIn('tipo', $request->tipos);
        }

        if ($request->has('CE') && !empty($request->CE)) {
            $query->whereIn('CE', $request->CE);
        }
        
        $films = $query->get();

        $html = view('films.partials.grid', compact('films'))->render();

        return response()->json(['html' => $html]);
    }

    public function index2()
    {
        // Mostra apenas filmes com escolhido = 'SIM'
        $films = Film::where('escolhido', 'SIM')->get();
        return view('films.Filmdex', compact('films'));
    }


    public function create()
    {
        $actors = actor::all(); // ou Atores, depende do nome do teu model

        return view('films.create', compact('actors'));
    }
    public function filtrarescolhido(Request $request)
    {
    // Debug inicial
    \Log::debug('Iniciando filtrarescolhido', ['request' => $request->all()]);
    
    // Query base SEMPRE com escolhido = 'SIM'
    $query = Film::where('escolhido', 'SIM');
    \Log::debug('Query base', ['sql' => $query->toSql(), 'bindings' => $query->getBindings()]);

    // Filtros adicionais
    if ($request->has('tipos') && !empty($request->tipos)) {
        $query->whereIn('tipo', $request->tipos);
        \Log::debug('Após filtrar tipos', ['sql' => $query->toSql()]);
    }
    
    if ($request->has('categorias') && !empty($request->categorias)) {
        $query->whereIn('categoria', $request->categorias);
        \Log::debug('Após filtrar categorias', ['sql' => $query->toSql()]);
    }
    
    if ($request->has('CE') && !empty($request->CE)) {
        $query->whereIn('classificacao_etaria', $request->CE);
        \Log::debug('Após filtrar CE', ['sql' => $query->toSql()]);
    }
    
    $films = $query->get();
    \Log::debug('Resultados encontrados', ['count' => $films->count()]);
    
    return response()->json([
        'html' => view('partials.filmes_grid', compact('films'))->render()
    ]);
}

    
}
