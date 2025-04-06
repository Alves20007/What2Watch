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

        $actor = Actor::whereRaw('DAY(birthday) = ? AND MONTH(birthday) = ?', [$dia, $mes])->get();

        return view('actor.Atordex', compact('actor'));
    }

    public function filter(Request $request)
    {
        $query = Actor::query();

        if ($request->has('profissao') && !empty($request->profissao)) {
            $query->whereIn('profissao', $request->profissao);
        }
        
        $actors = $query->get();

        if ($request->wantsJson()) {
            $html = view('actor.partials.grid', compact('actors'))->render();
            return response()->json(['html' => $html]);
        }

        return view('actor.Atordex', compact('actors'));
     }
}