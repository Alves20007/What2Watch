<?php

namespace Database\Seeders;

use App\Models\atores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Atores::create([
            'NomeAD' => 'Adam sandler',
            'NomeT' => 'Adam Richard Sandler',
            'idade' => '58 anos',
            'nascimneto' => '09/07/1966',
            'imagem'=> 'adam_sandler.jpg'
        ]);
    }
}
