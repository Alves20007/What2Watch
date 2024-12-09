<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class atores extends Model
{
    /** @use HasFactory<\Database\Factories\AtoresFactory> */
    use HasFactory;

    protected $fillabel = [
        'NomeAD',
        'slug',
        'NomeT',
        'idade',
        'nascimento',
        'imagem',
    ];

    public function films()
    {
        return $this->hasMany(Film::class,'title','slug','image','Data','PCategoria','categoria','audio','trailer','elenco','sinopse');
    }
}
