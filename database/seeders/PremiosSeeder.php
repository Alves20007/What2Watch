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
           'title'=>'O filme paralelípipedo esta previsto para ser lançado em 2026',
            'slug'=>'noticia1',
            'Data'=>'21/01/2025',
            'noticia' => 'Os estúdios Bravura Pictures anunciaram o lançamento de Paralelipípedo, uma produção ousada e eletrizante que chegará aos cinemas em 2026. Dirigido por Lucas Andrade, um dos novos talentos do cinema brasileiro, o filme promete ser uma montanha-russa de adrenalina, efeitos visuais deslumbrantes e uma narrativa cheia de reviravoltas. Ambientado em um mundo onde física, geometria e estratégia se tornam armas mortais, Paralelipípedo já está sendo apontado como um dos filmes mais aguardados do ano.
A história acompanha Lara Duarte, interpretada por Gabriela Menezes, uma arqueóloga e especialista em estruturas antigas, que descobre um artefato misterioso conhecido como o "Paralelipípedo do Infinito". A peça, aparentemente inofensiva, é na verdade um dispositivo capaz de manipular o tempo e o espaço, despertando o interesse de grupos sombrios ao redor do mundo. Lara se junta a Rafael Velasquez, vivido por Bruno Ramos, um ladrão de obras de arte com um passado enigmático, para impedir que o artefato caia nas mãos erradas.

As gravações, realizadas em locações exóticas como a Patagônia, o Saara e as ruínas maias de Tikal, contaram com cenas de ação ambiciosas. De perseguições em motocicletas pelas dunas do deserto a lutas coreografadas em plataformas flutuantes, cada sequência foi projetada para deixar o público sem fôlego. Lucas Andrade revelou em uma entrevista recente que utilizou tecnologia de ponta, combinando efeitos práticos e CGI, para criar um visual autêntico e impressionante.

Além das cenas de ação de tirar o fôlego, Paralelipípedo também mergulha em questões filosóficas e científicas. O roteiro, coescrito por Helena Fontes e Marcos Tavares, explora o impacto da manipulação do tempo na humanidade e os dilemas éticos enfrentados pelos protagonistas. "Queremos que o público saia do cinema não apenas empolgado, mas também pensando sobre o papel da ciência e da moralidade nas decisões que tomamos", comentou Fontes.

A trilha sonora, composta por Miguel Prado, promete ser outro destaque do filme. Prado, conhecido por suas composições épicas, uniu instrumentos clássicos a sintetizadores futuristas para criar um som que complementa a atmosfera de aventura e mistério. A faixa principal, intitulada "Infinito em Movimento", já foi elogiada por críticos que tiveram acesso à prévia.

Com estreia marcada para julho de 2026, Paralelipípedo já gera grande expectativa entre fãs de ação e aventura. O primeiro trailer será divulgado no início do próximo ano, e as especulações sobre a narrativa e os segredos do artefato continuam a crescer. Prepare-se para uma experiência cinematográfica única que promete colocar o público na beira de seus assentos.',
            'imagem'=> 'teste.png',
            'title noticia'=> '"Paralelipípedo" promete redefinir o gênero de ação e aventura em 2026',
        ]);
    }
}
