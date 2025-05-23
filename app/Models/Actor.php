<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /** @use HasFactory<\Database\Factories\ActorFactory> */
    use HasFactory;
    protected $guarded = [];

     protected $fillable = ['Name', 'Slug', 'Falas', 'birthday', 'sexo', 'bio'];

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