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
            'Falas'=>'Ai meu toba',
            'top100'=> 'Sim',
            'tipo'=> 'filme',
            'categoria' => 'acao',
            //'categoria' => 'acao'
        ]);

        Film::create([
            'title' => 'Batman',
            'slug' => 'batman',
            'tipo'=> 'filme',
            'image' => 'batman.png',
            'Data' => '4/11/2022',
            'PCategoria' => 'Drama',
            'categoria'=> 'ação, qudrinhos, ficçao cientifica, serial killer',
            'audio'=>'the-batman.ogg',
            'trailer'=>'the-batman.mp4',
            'elenco' =>'Adam sandler',
            'escolhido'=>'sim',
            'Falas' =>'Justice for gothan!',
            'sinopse'=> 'Quando um serial killer sádico começa a assassinar figuras políticas importantes em Gotham, o Batman é forçado a investigar a corrupção oculta da cidade e a questionar o envolvimento de sua família.',
        ]);

        Film::create([
            'title' => 'Avengers Endgame',
            'slug' => "A EndgameS",
            'image' => 'Endgame.png',
            'Falas' => 'Avengers Assemble!',
            'Data' => '25/04/2019',
            'tipo'=> 'filme',
            'categoria' => 'acao',
        ]);

        Film::create([
            'title' => 'Everest',
            'slug' => 'Everest',
            'image' => 'everest.png',
            'Data' => '4/11/2022',
            'Falas' => 'Montanha Dificil',
            'trailer'=>'the-batman.mp4',
            'tipo'=> 'filme',
            'categoria' => 'acao',
        ]);

        Film::create([
            'title' => 'Inception',
            'slug' => "Inception",
            'image' => 'inception.png',
            'Data' => '20/05/2004',
            'Falas' => 'caralho estou em drogas',
            'sinopse' => "teste da sinopse do inception ",
            'tipo'=> 'filme',
            'categoria' => 'acao',
        ]);

        Film::create([
            'title' => 'As Aventuras de Pi',
            'slug' => 'Pi adventure',
            'image' => 'Pi.jpg',
            'Falas' => 'Que medo de Tigres',    
            'Data' => '4/11/2022',
            'tipo'=> 'filme',
            'categoria' => 'acao',
        ]);

        Film::create([
            'title' => 'broklyn 99',
            'slug' => 'brok',
            'image' => 'broklyn99.jpg',
            'Falas' => 'Que medo de Tigres',    
            'Data' => '4/11/2022',
            'tipo'=> 'serie',
            'categoria' => 'acao',
        ]);

        
        Film::create([
            'title' => 'broklyn 99',
            'slug' => 'brok22q',
            'image' => 'broklyn99.jpg',
            'Falas' => 'Que medo de Tigres',    
            'Data' => '4/11/2022',
            'tipo'=> 'video',
            'categoria' => 'acao',
        ]);

    }
}
