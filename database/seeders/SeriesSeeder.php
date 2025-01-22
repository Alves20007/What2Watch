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
            'title'=> 'brooklyn 99',
            'image'=> 'broklyn99.jpg',
            'slug'=> 'testeSeries',
            'frase'=>'A única coisa de útil que fiz hoje foi um teste do Buzzfeed sobre que tipo de cebola eu sou.',
            'Data'=>'17/09/2013',
            'PCategoria'=>'Açao',
            'trailer'=>'brooklyn99.mp4',
            'audio'=>'broklyn99',
            'sinopse'=>'É uma serie de TV de comédia policial americada criada por Dan Goor e Michael Schur',
            'elenco'=>'Adam Sandler'
        ]);
    }
}
