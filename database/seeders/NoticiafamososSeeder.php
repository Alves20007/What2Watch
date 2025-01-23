<?php

namespace Database\Seeders;

use App\Models\noticiafamosos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiafamososSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        noticiafamosos::create([
            'title' => 'Gocha acusado de homicidio leva fans a doidice',
            'slug' => 'noticia2',
            'data' => '23/01/2025',
            'noticia' => 'No dia 25 de junho de 2020, um caso chocante abalou a tranquila cidade fictícia de São Valério. O corpo de Rafael Monteiro, um empresário conhecido na região por seus investimentos no setor imobiliário, foi encontrado em uma área isolada do Parque Central. Segundo a polícia, o homem foi vítima de um ataque violento, com indícios apontando para um possível assassinato.

Testemunhas relataram ter visto Rafael entrar no parque por volta das 20h da noite anterior Com Manuel luis gocha, mas ninguém percebeu qualquer movimentação suspeita até a manhã seguinte, quando o corpo foi descoberto por um funcionário responsável pela limpeza.

“O local do crime apresentava sinais de luta, mas não há informações claras sobre a motivação do ataque”, afirmou o delegado Marcos Vieira, que lidera as investigações.

A polícia agora trabalha com duas hipóteses: um assalto que terminou mal ou um crime premeditado. Entre os itens de valor da vítima, apenas um relógio caro foi levado. O celular e a carteira permaneceram intactos.

Amigos e familiares de Rafael descreveram-no como uma pessoa reservada, mas com algumas disputas recentes envolvendo negócios. A polícia não descarta a possibilidade de um conflito profissional ter motivado o crime.

O caso segue em investigação, e a população de São Valério está abalada pela tragédia. As autoridades pedem que qualquer pessoa com informações entre em contato pelo telefone da delegacia local.
',
            'imagem' => 'goch.png',
            'title noticia' => ' Corpo de empresário é encontrado em parque local; polícia investiga possível assassinato'
        ]);
    }
}
