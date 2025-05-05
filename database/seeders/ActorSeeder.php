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
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);

        $actor2 = Actor::create([
            'FullName' => 'chico da tina',
            'Name' => 'chico',
            'Slug'=>"AdamSandler",
            'image' => 'adam_sandler.jpg',
            'birthday' => '09/07/1966',
            'idade' => '58 anos',
            'Frase'=>'Agora percebo como sou feio',
            'Top' => 'sim',
            'profissao' => 'cantor',
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);

        $actor3 = Actor::create([
            'FullName' => 'Francisco Leite',
            'Name' => 'Francisco',
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

        $film = Film::where('slug', 'batman')->first();

        $film->actors()->attach([
            $actor1->id => ['personagem' => 'Jocker'],
            $actor2->id => ['personagem' => 'Batman'],
            $actor3->id => ['personagem' => 'Alfred'],
        ]);
        
        // Atualizar elenco do filme
        $elenco = $film->actors->pluck('Name')->implode(', ');
        $film->elenco = $elenco;
        $film->save();



        // DB::table('actor_category')->insert([
        //     'actor_id' => $actor->id,
        //     'category_id' => $oscar_id
        // ]);

        // $film = Film::slug('name', 'Batman')->first();

        // DB::table('actor_film')->insert([
        //     'actor_id' => 1,
        //     'film_id' => $film->id,
        //     'personagem' => 'Jocker'
        // ]);

        // DB::table('actor_film')->insert([
        //     'actor_id' => 2,
        //     'film_id' => $film->id,
        //     'personagem' => 'Batman'
        // ]);

        // DB::table('actor_film')->insert([
        //     'actor_id' => 3,
        //     'film_id' => $film->id,
        //     'personagem' => 'Alfred'
        // ]);

    }
}
