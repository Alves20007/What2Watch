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
        'Falas',
        'participou',
        'Editora',
        'Oscares',
        'Diretor',
        'Data',
        'CE',
        'PCategoria',
        'categoria',
        'audio',
        'trailer',
        'Elenco',
        'sinopse',
        'tipo',
        'image',
        'Diretor',
        'Editora',
        'Temporadas',
        'Episodios',
        'banner',
        'criador'    
    ];
    protected $casts = [
    'Elenco' => 'array',
    'Categoria'=> 'array'
    ];
    public function usersWhoWatchlist()
    {
        return $this->belongsToMany(User::class, 'watchlist')->withTimestamps();
    }
    public function reviews() {
        return $this->hasMany(Ranking::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('rating');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'criador');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class)
                    ->withPivot('personagem')
                    ->withTimestamps();
    }

}
