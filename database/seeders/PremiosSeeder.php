<?php

namespace Database\Seeders;

use App\Models\Premios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PremiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Premios::create([
            'Name' => 'Globos de Ouro',
            'slug'=>'Globos',
            'day' => '10/3/2025',
            'image'=> 'teste.png',
        ]);
    }
}
