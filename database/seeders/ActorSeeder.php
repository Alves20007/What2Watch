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
            'FullName' => 'Teste do testinha Testoso',
            'Name' => 'Teste',
            'Slug'=>"TesteDoTeste",
            'image' => 'incognito.png',
            'birthday' => '20/05/2004',
            //'categoria' => 'acao'
        ]);
    }
}
