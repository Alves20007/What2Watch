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
            'url' => url('http://localhost:8000/primeiro'),
            'image' => 'spotless.jpg',
            'Data' => '20/05/2004',
            'PCategoria' => 'Drama',
            'categoria'=> 'ação,ficção cientifica',
            //'categoria' => 'acao'
        ]);

        Film::create([
            'title' => 'Batman',
            'url' => url('http://localhost:8000/batman'),
            'image' => 'batman.png',
            'Data' => '4/11/2022',
            'PCategoria' => 'Drama',
            'categoria'=> 'ação, qudrinhos, ficçao cientifica, serial killer',
        ]);

        Film::create([
            'title' => 'Avengers Endgame',
            'url' => "{{ url('site.acao') }}",
            'image' => 'Endgame.png',
            'Data' => '25/04/2019'
        ]);

        Film::create([
            'title' => 'Everest',
            'url' => 'google.com',
            'image' => 'everest.png',
            'Data' => '4/11/2022'
        ]);

        Film::create([
            'title' => 'Inception',
            'url' => "{{ url('site.acao') }}",
            'image' => 'inception.png',
            'Data' => '20/05/2004'
        ]);

        Film::create([
            'title' => 'As Aventuras de Pi',
            'url' => 'google.com',
            'image' => 'Pi.jpg',
            'Data' => '4/11/2022'
        ]);

    }
}
