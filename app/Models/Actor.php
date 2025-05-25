<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /** @use HasFactory<\Database\Factories\ActorFactory> */
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['FullName', 'Slug', 'Frase', 'birthday', 'sexo', 'bio', 'Country', 'profissao', 'Falecimento', 'image', 'Name'];

    public function oscar() {
        return $this->belongsToMany(Category::class);        
    }

 
    public function films()
    {
        return $this->belongsToMany(Film::class)
                    ->withPivot('personagem')
                    ->withTimestamps();
    }
}