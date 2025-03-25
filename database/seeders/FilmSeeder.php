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
            'Falas'=>'Happy are the forgetful, for they make the best of their mistakes.',
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'ESOES.mp4',
            'sinopse' => 'Joel se surpreende ao saber que seu amor verdadeiro, Clementine, o apagou completamente de sua memória. Ele decide fazer o mesmo, mas muda de ideia.',
            //'categoria' => 'acao'
        ]);

        Film::create([
            'title' => 'Batman',
            'slug' => 'batman',
            'tipo'=> 'filme',
            'image' => 'batman.png',
            'Data' => '4/11/2022',
            'oscares' => 'Sim',
            'categoria'=> 'ação, qudrinhos, ficçao cientifica, serial killer',
            'trailer'=>'the-batman.mp4',
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
            'trailer' => 'EndGame.mp4',
            'sinopse' => 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos..',
        ]);

        Film::create([
            'title' => 'Everest',
            'slug' => 'Everest',
            'image' => 'everest.png',
            'Data' => '4/11/2022',
            'Falas' => 'The biggest mountain to climb is within each of us.',
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'Everest.mp4',
            'sinopse' => 'Em maio de 1996, escaladores de duas expedições diferentes começam a subir em direção ao cume do Monte Everest, mas logo se veem lutando por suas vidas em uma nevasca mortal.',
        ]);

        Film::create([
            'title' => 'Inception',
            'slug' => "Inception",
            'image' => 'inception.png',
            'Data' => '20/05/2004',
            'Falas' => 'An idea is like a highly contagious virus, which can grow, grow to form you or to destroy you.',
            'sinopse' => "teste da sinopse do inception ",
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'Inception.mp4',
            'sinopse' => 'Dom Cobb é um ladrão com a rara habilidade de roubar segredos do inconsciente, obtidos durante o estado de sono.',
        ]);

        Film::create([
            'title' => 'As Aventuras de Pi',
            'slug' => 'Pi adventure',
            'image' => 'Pi.jpg',
            'Falas' => '⁠Believing in everything at the same time is the same as believing in nothing.',    
            'Data' => '4/11/2022',
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'Pi.mp4',
            'sinopse' => 'Pi e sua família decidem ir para o Canadá depois de fechar o zoológico da família. A embarcação deles naufraga, e o jovem sobrevive junto com alguns animais, incluindo um temível tigre de Bengala, com o qual desenvolve uma ligação.',
        ]);

        Film::create([
            'title' => 'broklyn 99',
            'slug' => 'brok',
            'image' => 'broklyn99.jpg',
            'Falas' => 'The only useful thing I did today was take a Buzzfeed quiz about what kind of onion I am.',    
            'Data' => '4/11/2022',
            'tipo'=> 'serie',
            'categoria' => 'acao',
            'trailer' => '99.mp4',
            'sinopse' => 'O despreocupado detetive Jake Peralta precisa aprender a seguir as regras e trabalhar em equipe quando um capitão exigente assume o comando de seu esquadrão',
        ]);

        
        Film::create([
            'title' => 'Como abrir uma porta',
            'slug' => 'madjimby',
            'image' => 'MadjimbiPorta.jpg',
            'Falas' => 'Olá!',    
            'Data' => '4/11/2022',
            'tipo'=> 'video',
            'categoria' => 'acao',
            'trailer' => 'porta.mp4',
            'sinopse' => 'Hoje vou ensinar a fechar uma porta',
        ]);

    }
}
