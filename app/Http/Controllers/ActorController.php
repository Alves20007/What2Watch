<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use Illuminate\Support\Carbon;

class ActorController extends Controller
{
    public function aniversariantesHoje()
    {
        $hoje = Carbon::now();
        $dia = $hoje->format('d');
        $mes = $hoje->format('m');

        $atores = Actor::all()->filter(function ($ator) use ($dia, $mes) {
            if (!$ator->birthday) return false;

            // Garante que birthday está no formato dd/mm/yyyy
            if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $ator->birthday, $matches)) {
                [$full, $d, $m, $y] = $matches;
                return $d === $dia && $m === $mes;
            }
            return false;
        });

        return view('actor.Atordex', ['actor' => $atores]);
    }

    public function filter(Request $request)
    {
        $query = Actor::query();

        if ($request->has('profissao') && !empty($request->profissao)) {
            $query->whereIn('profissao', $request->profissao);
        }
        if ($request->has('sexo') && !empty($request->sexo)) {
            $query->whereIn('sexo', $request->sexo);
        }
        if ($request->has('search') && !empty($request->search)) {
            $query->where('Name', 'like', '%' . $request->search . '%');
        }
        
        $actors = $query->get();

        if ($request->wantsJson() || $request->ajax()) {
            $html = view('actor.partials.grid', compact('actors'))->render();
            return response()->json(['html' => $html]);
        }

        return view('actor.Atordex', compact('actors'));
    }

    public function show($slug)
    {
        $ator = Actor::where('slug', $slug)->firstOrFail();

        // Filmes onde o campo 'elenco' contém o ID do ator
        $filmesComAtor = \App\Models\Film::whereJsonContains('elenco', (string) $ator->id)->get();

        return view('atores.show', compact('ator', 'filmesComAtor'));
    }
}