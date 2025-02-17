<?php

namespace Database\Seeders;

use App\Models\actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        actor::create([
            'FullName' => 'Adam Richard Sandler',
            'Name' => 'Adam Sandler',
            'Slug'=>"AdamSandler",
            'image' => 'adam_sandler.jpg',
            'birthday' => '09/07/1966',
            'idade' => '58 anos',
            'Frase'=>'Agora percebo como sou feio',
            'Oscares'=> 'sim',
            'Historia' => 'Adam sandler é um atori, comediante, produtor, roteirista inimaginavel',
        ]);
    }
}
