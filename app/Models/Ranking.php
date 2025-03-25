<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    /** @use HasFactory<\Database\Factories\RankingFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'films_id', 'rating', 'comment'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function film() {
        return $this->belongsTo(Film::class);
    }
}
