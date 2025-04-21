<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Actor;
use App\Models\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $filters = $request->input('filter', ['films', 'actors', 'users']); // se nada for selecionado, busca tudo

        $results = [
            'films' => collect(),
            'actors' => collect(),
            'users' => collect(),
        ];

        if ($query) {
            if (in_array('films', $filters)) {
                $results['films'] = Film::where('title', 'like', '%' . $query . '%')->get();
            }

            if (in_array('actors', $filters)) {
                $results['actors'] = Actor::where('name', 'like', '%' . $query . '%')->get();
            }

            if (in_array('users', $filters)) {
                $results['users'] = User::where('username', 'like', '%' . $query . '%')->get();
            }
        }

        return view('search', compact('results'));
    }
}