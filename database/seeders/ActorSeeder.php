<?php

namespace Database\Seeders;

use App\Models\Actor;
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
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);

        
        $actor = Actor::create([
            'FullName' => 'teste',
            'Name' => 'teste',
            'Slug'=>"testa",
            'image' => 'adam_sandler.jpg',
            'birthday' => '1966/03/11',
            'idade' => '58 anos',
            'Frase'=>'Agora percebo como sou feio',
            'Top' => 'sim',
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);
        
        
        DB::table('actor_category')->insert([
            'actor_id' => $actor->id,
            'category_id' => $oscar_id
        ]);

    }
}
