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

        $actor = Actor::create([
            'FullName' => 'Adam Richard Sandler',
            'Name' => 'Adam Sandler',
            'Slug'=>"Adam Sandler",
            'image' => 'adam_sandler.jpg',
            'birthday' => '09/07/1966',
            'idade' => '58 anos',
            'Frase'=>'Agora percebo como sou feio',
            'Oscares'=> 'sim',
            'profissao' => 'ator',
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);

        $actor = Actor::create([
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

        $actor = Actor::create([
            'FullName' => 'Francisco Leite',
            'Name' => 'Francisco',
            'Slug'=>"FranciscoLeite",
            'image' => 'adam_sandler.jpg',
            'birthday' => '09/07/1966',
            'idade' => '58 anos',
            'Frase'=>'Agora percebo como sou feio',
            'Top' => 'sim',
            'profissao' => 'cantor',
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);

        
        $actor = Actor::create([
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

        // Actor::create(['name' => 'Jim Carrey']);
        // Actor::create(['name' => 'Kate Winslet']);
        // Actor::create(['name' => 'Robert Pattinson']);
        // Actor::create(['name' => 'Zoë Kravitz']);
        
        
        DB::table('actor_category')->insert([
            'actor_id' => $actor->id,
            'category_id' => $oscar_id
        ]);

        $film = Film::slug('name', 'Batman')->first();

        DB::table('actor_film')->insert([
            'actor_id' => 1,
            'film_id' => $film->id,
            'personagem' => 'Jocker'
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 2,
            'film_id' => $film->id,
            'personagem' => 'Batman'
        ]);

        DB::table('actor_film')->insert([
            'actor_id' => 3,
            'film_id' => $film->id,
            'personagem' => 'Alfred'
        ]);

    }
}
