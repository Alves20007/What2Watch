<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::create([
            'title' => 'Eternal Sunshine of the Spotless Mind',
            'slug' => 'eternal',
            'image' => 'spotless.jpg',
            'Data' => '20/05/2004',
            'PCategoria' => 'Drama',
            'categoria'=> 'ação,ficção cientifica',
            //'categoria' => 'acao'
        ]);

        Film::create([
            'title' => 'Batman',
            'slug' => 'batman',
            'image' => 'batman.png',
            'Data' => '4/11/2022',
            'PCategoria' => 'Drama',
            'categoria'=> 'ação, qudrinhos, ficçao cientifica, serial killer',
        ]);

        Film::create([
            'title' => 'Avengers Endgame',
            'slug' => "{{ url('site.acao') }}",
            'image' => 'Endgame.png',
            'Data' => '25/04/2019'
        ]);

        Film::create([
            'title' => 'Everest',
            'slug' => 'google.com',
            'image' => 'everest.png',
            'Data' => '4/11/2022'
        ]);

        Film::create([
            'title' => 'Inception',
            'slug' => "{{ url('site.acao') }}",
            'image' => 'inception.png',
            'Data' => '20/05/2004'
        ]);

        Film::create([
            'title' => 'As Aventuras de Pi',
            'slug' => 'google.com',
            'image' => 'Pi.jpg',
            'Data' => '4/11/2022'
        ]);

    }
}
