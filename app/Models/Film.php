<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\atores;

class Film extends Model
{
    /** @use HasFactory<\Database\Factories\FilmFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image',
        'Data',
        'PCategoria',
        'categoria',
        'audio',
        'trailer',
        'elenco',
        'sinopse'
    ];
     
    public function atores()
    {
        return $this->hasMany(Atores::class,'NomeAD','slug','NomeT','idade','nascimento','imagem');
    }
}
