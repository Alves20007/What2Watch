<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /** @use HasFactory<\Database\Factories\FilmFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'Data',
        'PCategoria',
        'categoria',
        'audio',
        'trailer',
        'elenco',
        'sinopse',
        'tipo',
        'image',
        'Temporada',
        'Episodios'
    ];
    
    public function usersWhoWatchlist()
    {
        return $this->belongsToMany(User::class, 'watchlist')->withTimestamps();
    }

}
