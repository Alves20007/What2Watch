<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Film;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oscar_id = Category::where('slug', 'oscar')->first()->id;
        

        $actor1 = Actor::create([
            'FullName' => 'Adam Richard Sandler',
            'Name' => 'kskasdkasd',
            'Slug'=>"Adam Sandler",
            'image' => 'adam_sandler.jpg',
            'birthday' => '09/07/1966',
            'idade' => '58 anos',
            'Frase'=>'Agora percebo como sou feio',
            'Oscares'=> 'sim',
            'profissao' => 'ator',
            'bio' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);

        $actor2 = Actor::create([
            'FullName' => ' Francisco da Concertina',
            'Name' => 'Chico da Tina',
            'Slug'=>"ChicoDaTina",
            'image' => 'adam_sandler.jpg',
            'birthday' => '03/04/1996',
            'idade' => '58 anos',
            'Frase'=>'Chico da tina tu és mesmo fudido',
            'profissao' => 'cantor',
            'sexo' => 'Crocodilo',
            'country' => 'Evora,Portugal,Terra,Via Lactea',
            'bio' => 'Chico da Tina ou Francisco da Concertina, é um rapper português de Viana do Castelo. A sua música é caraterizada pelo tom jocoso e caricatural.',
        ]);

        $actor3 = Actor::create([
            'FullName' => 'Francisco Leite',
            'Name' => 'Francisco',
            'banner' => 'Loki.jpg',
            'Slug'=>"FranciscoLeite",
            'image' => 'adam_sandler.jpg',
            'birthday' => '09/07/1966',
            'idade' => '58 anos',
            'sexo' => 'femenino',
            'country' => 'Japao,Conxixina',
            'Frase'=>'Agora percebo como sou feio',
            'Top' => 'sim',
            'bio' => 'Ele foi um jovem no qual nasceu a 04/12/2028 e que nasceu no kenya',
            'profissao' => 'cantor',
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);

        
        $actor4 = Actor::create([
            'FullName' => 'wuant',
            'Name' => 'teste',
            'Slug'=>"testa",
            'image' => 'adam_sandler.jpg',
            'birthday' => '1966/03/11',
            'idade' => '58 anos',
            'Frase'=>'Agora percebo como sou feio',
            'Top' => 'sim',
            'profissao' => 'Criador de conteudo',
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);


        //Filme do Batman
        $filmBatman = Film::where('slug', 'batman')->first();

        $filmBatman->actors()->attach([
            $actor1->id => ['personagem' => 'Jocker'],
            $actor2->id => ['personagem' => 'Batman'],
            $actor3->id => ['personagem' => 'Alfred'],
        ]);
        
        $elenco = $filmBatman->actors->pluck('Name')->implode(', ');
        $filmBatman->elenco = $elenco;
        $filmBatman->save();

        $serieWednesday = Film::where('slug', 'Wednesday')->first();

        $serieWednesday->actors()->attach([
            $actor1->id => ['personagem' => 'Jocker'],
            $actor2->id => ['personagem' => 'Batman'],
            $actor3->id => ['personagem' => 'Alfred'],
        ]);
        
        $elenco = $serieWednesday->actors->pluck('Name')->implode(', ');
        $serieWednesday->elenco = $elenco;
        $serieWednesday->save();
        
    }
}
