<?php

namespace Database\Seeders;

use App\Models\series;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        series::create([
            'Nome'=> 'teste das series',
            'imagem'=> 'incognito.png',
            'slug'=> 'testeSeries',
        ]);
    }
}
