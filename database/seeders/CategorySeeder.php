<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Manuais',
            'slug' => 'manuais',  
            'image' => 'manuais.jpg'          
        ]);
      
        Category::create([
            'name' => 'Cidadania e Desenvolvimento',
            'slug' => 'ced',
            'description' => 'Nesta categoria poderá encontrar informações sobre os domínios da área curricular de Cidadania e Desenvolvimento'            
        ]);
      
        Category::create([
            'name' => 'Programação e Sistemas de Informação',
            'slug' => 'psi',            
        ]);
      
        Category::create([
            'name' => 'Redes de Comunicação',
            'slug' => 'rc',            
        ]);
    }
}
