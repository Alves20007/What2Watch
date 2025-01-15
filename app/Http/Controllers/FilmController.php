<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\atores;
use App\Models\Film;


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
}
