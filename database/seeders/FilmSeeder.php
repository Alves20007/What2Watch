<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::create([
            'title' => 'Eternal Sunshine of the Spotless Mind',
            'slug' => 'eternal',
            'image' => 'spotless.jpg',
            'Data' => '20/05/2004',
            'Falas'=>'Happy are the forgetful, for they make the best of their mistakes.',
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'ESOES.mp4',
            'Diretor'=> 'Michel Gondry',
            'Escolhido'=> 'sim',
            'Editora' => 'Focus Features',
            'CE'=> 'M/12',
            'sinopse' => 'Joel se surpreende ao saber que seu amor verdadeiro, Clementine, o apagou completamente de sua memória. Ele decide fazer o mesmo, mas muda de ideia.',
            //'categoria' => 'acao'
        ]);

        Film::create([
            'title' => 'Batman',
            'slug' => 'batman',
            'tipo'=> 'filme',
            'banner'=> 'batmanBanner.jpg',
            'image' => 'batman.png',
            'Data' => '4/11/2022',
            'oscares' => 'Sim',
            'categoria'=> 'ação',
            'trailer'=>'the-batman.mp4',
            'escolhido'=>'sim',
            'Diretor' => 'Matt Reeves',
            'Editora' => 'Warner Bros. Pictures.',
            'Falas' =>'Justice for gothan!',
            'CE'=> 'M/12',
            'sinopse'=> 'Quando um serial killer sádico começa a assassinar figuras políticas importantes em Gotham, o Batman é forçado a investigar a corrupção oculta da cidade e a questionar o envolvimento de sua família.',
        ]);
        

        // $robert = Actor::where('name', 'Robert Pattinson')->first();


        Film::create([
            'title' => 'Avengers Endgame',
            'slug' => "AvengerEndgame",
            'image' => 'Endgame.png',
            'Falas' => 'Avengers Assemble!',
            'Data' => '25/04/2019',
            'tipo'=> 'filme',
            'Escolhido'=> 'sim',
            'categoria' => 'acao',
            'trailer' => 'EndGame.mp4',
            'Diretor' => 'Anthony Russo, Joe Russo',
            'Editora' => 'Marvel',
            'CE'=> 'M/12',
            'sinopse' => 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos..',
        ]);

        Film::create([
            'title' => 'Everest',
            'slug' => 'Everest',
            'image' => 'everest.png',
            'Data' => '4/11/2022',
            'Falas' => 'The biggest mountain to climb is within each of us.',
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'Everest.mp4',
            'Diretor' => 'Baltasar Kormákur',
            'Editora' => 'Universal Picture',
            'CE'=> 'M/12',
            'sinopse' => 'Em maio de 1996, escaladores de duas expedições diferentes começam a subir em direção ao cume do Monte Everest, mas logo se veem lutando por suas vidas em uma nevasca mortal.',
        ]);
        Film::create([
            'title' => 'Star Wars I',
            'slug' => 'StarWarsI',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsI.jpg',
            'image' => 'StarWarsI.jpg',
            'Data' => '16/05/2002',
            'oscares' => '3 Oscars (Melhor Som, Efeitos Visuais, Edição de Som)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsI.mp4',
            'Diretor' => 'George Lucas',
            'Editora' => 'W20th Century Fox',
            'Falas' =>'Fear is the path to the dark side.',
            'CE'=> 'PG',
            'sinopse'=> 'Dois Cavaleiros Jedi descobrem um jovem com grande potencial na Força enquanto enfrentam uma ameaça crescente da Federação do Comércio.',
        ]);

        Film::create([
            'title' => 'Star Wars II',
            'slug' => 'StarWarsII',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsII.jpg',
            'image' => 'StarWarsII.jpg',
            'Data' => '16/05/2002',
            'oscares' => '1 Oscar (Melhores Efeitos Visuais)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsII.mp4',
            'Diretor' => 'George Lucas',
            'Editora' => '20th Century Fox',
            'Falas' =>'I dont like sand. Its coarse and rough and irritating, and it gets everywhere.',
            'CE'=> 'PG',
            'sinopse'=> 'Anakin Skywalker inicia um romance proibido com Padmé Amidala enquanto a galáxia se aproxima da guerra.',
        ]);
        
        Film::create([
            'title' => 'Star Wars III',
            'slug' => 'StarWarsIII',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsIII.jpg',
            'image' => 'StarWarsIII.jpg',
            'Data' => '19/05/2005',
            'oscares' => '1 Oscar (Melhores Efeitos Visuais)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsIII.mp4',
            'escolhido'=>'sim',
            'Diretor' => 'George Lucas',
            'Editora' => '20th Century Fox',
            'Falas' =>'You were the Chosen One!',
            'CE'=> 'PG-13',
            'sinopse'=> 'Anakin Skywalker sucumbe ao lado sombrio da Força, tornando-se Darth Vader, enquanto a República se transforma no Império Galáctico.',
        ]);
        
        Film::create([
            'title' => 'Star Wars IV',
            'slug' => 'StarWarsIV',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsIV.jpg',
            'image' => 'StarWarsIV.jpg',
            'Data' => '25/05/1977',
            'oscares' => '6 Oscars (incluindo Melhor Direção de Arte e Efeitos Visuais)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsIV.mp4',
            'Diretor' => 'George Lucas',
            'Editora' => '20th Century Fox',
            'Falas' =>'May the Force be with you.',
            'CE'=> 'M/12',
            'sinopse'=> 'Luke Skywalker se junta à Aliança Rebelde para destruir a Estrela da Morte e enfrentar o Império.',
        ]);
        

        Film::create([
            'title' => 'Star Wars V',
            'slug' => 'StarWarsV',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsV.jpg',
            'image' => 'StarWarsV.jpg',
            'Data' => '21/05/1980',
            'oscares' => '1 Oscar (Melhor Som)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsV.mp4',
            'Diretor' => 'Irvin Kershner',
            'Editora' => '20th Century Fox',
            'Falas' =>'I am your father',
            'CE'=> 'M/12',
            'sinopse'=> 'O Império persegue os Rebeldes enquanto Luke treina com Yoda e enfrenta Darth Vader.',
        ]);
        
        Film::create([
            'title' => 'Star Wars VI',
            'slug' => 'StarWarsVI',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsVI.jpg',
            'image' => 'StarWarsVI.jpg',
            'Data' => '25/05/1983',
            'oscares' => '1 Oscar (Melhores Efeitos Visuais);',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsVI.mp4',
            'Diretor' => 'Richard Marquand',
            'Editora' => '20th Century Fox',
            'Falas' =>'Its a trap!',
            'CE'=> 'M/12',
            'sinopse'=> 'Luke confronta Vader e o Imperador enquanto os Rebeldes tentam destruir a segunda Estrela da Morte.',
        ]);
        

        Film::create([
            'title' => 'Star Wars VII',
            'slug' => 'StarWarsVII',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsVII.jpg',
            'image' => 'StarWarsVII.jpg',
            'Data' => '18/12/2015e',
            'oscares' => '5 indicações (incluindo Melhor Edição, Melhores Efeitos Visuais)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsVII.mp4',
            'Diretor' => 'Matt Reeves',
            'Editora' => 'Walt Disney Studios',
            'Falas' =>'Chewie, were home.',
            'CE'=> 'M/12',
            'sinopse'=> 'Trinta anos após a queda do Império, uma nova ameaça surge, e Rey embarca em uma jornada para encontrar Luke Skywalker.',
        ]);
        

        Film::create([
            'title' => 'Star Wars VIII',
            'slug' => 'StarWarsVIII',
            'tipo'=> 'filme',
            'banner'=> 'StarWarsVIII.jpg',
            'image' => 'StarWarsVIII.png',
            'Data' => '15/12/2017',
            'oscares' => '4 indicações (incluindo Melhor Trilha Sonora Original, Melhores Efeitos Visuais)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsVIII.mp4',
            'Diretor' => 'Rian Johnson',
            'Editora' => 'Walt Disney Studios',
            'Falas' =>'Let the past die. Kill it if you have to.',
            'CE'=> 'M/12',
            'sinopse'=> 'Rey busca treinamento com Luke Skywalker, enquanto a Resistência enfrenta desafios crescentes contra a Primeira Ordem.',
        ]);
        
        Film::create([
            'title' => 'Star Wars IX',
            'slug' => 'StarWarsIX',
            'tipo'=> 'filme',
            'banner'=> 'batmanBanner.jpg',
            'image' => 'StarWarsIX.jpg',
            'Data' => '20/12/2019',
            'oscares' => '3 indicações (incluindo Melhores Efeitos Visuais, Melhor Trilha Sonora Original)',
            'categoria'=> 'ação',
            'trailer'=>'StarWarsIX.mp4',
            'Diretor' => 'J.J. Abrams',
            'Editora' => 'Walt Disney Studios',
            'Falas' =>'The Force will be with you. Always.',
            'CE'=> 'M/12',
            'sinopse'=> 'Rey lidera a luta final contra a Primeira Ordem, enfrentando revelações sobre sua linhagem e o retorno do Imperador Palpatine.',
        ]);
        

        

        Film::create([
            'title' => 'Inception',
            'slug' => "Inception",
            'image' => 'inception.png',
            'Data' => '20/05/2004',
            'Falas' => 'An idea is like a highly contagious virus, which can grow, grow to form you or to destroy you.',
            'sinopse' => "teste da sinopse do inception ",
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'Inception.mp4',
            'Diretor' =>'Christopher Nolan',
            'Editora' =>' Legendary Pictures',
            'CE'=> 'M/12',
            'sinopse' => 'Dom Cobb é um ladrão com a rara habilidade de roubar segredos do inconsciente, obtidos durante o estado de sono.',
        ]);

        Film::create([
            'title' => 'As Aventuras de Pi',
            'slug' => 'Pi adventure',
            'image' => 'Pi.jpg',
            'Falas' => '⁠Believing in everything at the same time is the same as believing in nothing.',    
            'Data' => '4/11/2022',
            'tipo'=> 'filme',
            'categoria' => 'acao',
            'trailer' => 'Pi.mp4',
            'Diretor' => 'Ang Lee',
            'Editora' => '20th Century Fox',
            'CE'=> 'M/6',
            'sinopse' => 'Pi e sua família decidem ir para o Canadá depois de fechar o zoológico da família. A embarcação deles naufraga, e o jovem sobrevive junto com alguns animais, incluindo um temível tigre de Bengala, com o qual desenvolve uma ligação.',
        ]);

    
        Film::create([
            'title' => 'as fitas de poughkeepsie',
            'slug' => 'AsFitas',
            'image' => 'AsFitas.jpg',
            'falas' => 'Mestre...',
            'Data' => '10/10/2017',
            'tipo' => 'filme',
            'Escolhido'=> 'sim',
            'categoria' => 'terror',
            'trailer' => 'AsFitas.mp4',
            'Diretor' => 'John Erick Dowdle',
            'Editora' => 'Metro-Goldwyn-Maye',
            'CE'=> 'M/18',
            'sinopse' => 'As Fitas de Poughkeepsie é um documentário sobre a descoberta de centenas de fitas VHS gravadas por um serial killer, revelando seus crimes brutais e a tortura psicológica de suas vítimas.' 
        ]);
        
        Film::create([
            'title' => 'Megan is missing',
            'slug' => 'MeganIsMissing',
            'image' => 'MeganIsMissing.jpg',
            'falas' => 'Megan',
            'Data' => '31/10/2011',
            'tipo' => 'filme',
            'categoria' => 'terror',
            'trailer' => 'MeganIsMissing.mp4',
            'Diretor' =>'Michael Goi',
            'Editora' =>'Anchor Bay Entertainment.',
            'CE'=> 'M/18',
            'sinopse' => 'Megan Is Missing é um filme de terror psicológico no estilo found footage que acompanha a busca por Megan Stewart, uma adolescente que desaparece após conhecer um homem online.'
        ]); 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////        

        Film::create([
            'title' => 'broklyn 99',
            'slug' => 'broklyn99',
            'image' => 'broklyn99.jpg',
            'Falas' => 'The only useful thing I did today was take a Buzzfeed quiz about what kind of onion I am.',    
            'Data' => '4/11/2022',
            'Escolhido'=> 'sim',
            'tipo'=> 'serie',
            'categoria' => 'policial',
            'Episodios' => '153',
            'Temporadas' => '8', 
            'trailer' => '99.mp4',
            'Editora' => 'FOX',
            'Diretor' => 'Dan Goor, Michael Schur',
            'CE'=> 'M/12',
            'sinopse' => 'O despreocupado detetive Jake Peralta precisa aprender a seguir as regras e trabalhar em equipe quando um capitão exigente assume o comando de seu esquadrão',
        ]);

        Film::create([
            'title' => 'Young Sheldon',
            'banner' => 'YoungSheldonBanner.jpg',
            'slug' => 'YoungSheldon',
            'image' => 'YoungSheldon.jpg',
            'falas' => 'Bazinga',
            'Data' => '25/5/2017',
            'tipo' => 'serie',
            'categoria' => 'Sitcom',
            'trailer' => 'YoungSheldon.mp4',
            'Episodios' => '141',
            'Temporadas' => '7',
            'Diretor' =>'Chuck Lorre, Steven Molare',
            'Editora' =>'CBS',
            'CE'=> 'M/6',
            'sinopse' => 'Ambientada no Texas dos anos 80 e 90, a história mostra Sheldon enfrentando desafios acadêmicos e sociais enquanto cresce em uma família tradicional e tenta se encaixar em um mundo que não entende sua genialidade.',
        ]);

        Film::create([
            'title' => 'Alice In Borderland',
            'banner' => 'AliceInBorderland.jpg',
            'slug' => 'AliceInBorderland',
            'image' => 'AliceInBorderland.jpg',
            'falas' => 'Arisu..',
            'Escolhido'=> 'sim',
            'Data' => '10/12/2020',
            'tipo' => 'serie',
            'categoria' => 'thriller',
            'trailer' => 'AliceInBorderland.mp4',
            'Episodios' => '17',
            'Temporadas' => '2',
            'Diretor' =>'Haro Aso',
            'Editora' =>'Netflix',
            'CE'=> 'M/16',
            'sinopse' => ' Para sobreviver, eles precisam participar de jogos letais, onde cada desafio testa suas habilidades físicas e mentais. Enquanto lutam pela vida, eles tentam desvendar os mistérios desse mundo e encontrar uma saída.',
        ]);

        Film::create([
            'title' => 'Wednesday',
            'slug' => 'Wednesday',
            'banner' => 'Wednesday.jpg',
            'image' => 'Wednesday.jpg',
            'falas' => 'I will dance, dance, dance. With my hands, hands, hands',
            'Data' => '23/11/2022',
            'tipo' => 'serie',
            'categoria' => 'terror',
            'trailer' => 'Wednesday.mp4',
            'Episodios' => '16',
            'Temporadas' => '1',
            'Diretor' =>'Alfred Gough, Miles Millar',
            'Editora' =>'Netflix',
            'CE'=> 'M/12',
            'sinopse' => 'Wednesday acompanha Wednesday Addams enquanto investiga mistérios sombrios na Nevermore Academy, descobrindo segredos sobre sua família e um monstro aterrorizando a cidade.',
        ]);

        Film::create([
            'title' => 'Loki',
            'slug' => 'Loki',
            'banner' => 'Loki.jpg',
            'image' => 'Loki.jpg',
            'falas' => 'Eu vou queimar este lugar ate ao chão',
            'Data' => '9/6/2021',
            'tipo' => 'serie',
            'Escolhido'=> 'sim',
            'categoria' => 'acao',
            'trailer' => 'Loki.mp4',
            'Episodios' => '12',
            'Temporadas' => '1',
            'Diretor' =>'Michael Waldron',
            'Editora' =>'Disney+',
            'CE'=> 'M/12',
            'sinopse' => 'Loki segue o Deus da Trapaça após os eventos de Vingadores: Ultimato, quando ele é capturado pela AVT e embarca em uma jornada pelo multiverso para confrontar seu destino.',
        ]);

        Film::create([
            'title' => 'Slugterra',
            'slug' => 'Slugterra',
            'image' => 'Slugterra.jpg',
            'falas' => 'Slug it out!',
            'Data' => '3/9/2012',
            'tipo' => 'serie',
            'Escolhido'=> 'sim',
            'categoria' => 'animacao',
            'trailer' => 'Slugterra.mp4',
            'Episodios' => '57',
            'Temporadas' => '5',
            'Diretor' =>'Asaph Fipke',
            'Editora' =>'Disney XD',
            'CE'=> 'M/6',
            'sinopse' => 'Slugterra segue Eli Shane, um jovem que explora o mundo subterrâneo de Slugterra, treinando lesmas com poderes especiais para batalhas enquanto enfrenta vilões que ameaçam o equilíbrio do local.',
        ]);
        
        Film::create([
            'title' => 'Morangos com Açúcar',
            'slug' => 'MorangosComAcucar',
            'banner' => 'MorangosComAcucar.jpg',
            'image' => 'MorangosComAcucar.jpg',
            'falas' => 'Slug it out!',
            'Data' => '3/9/2012',
            'tipo' => 'serie',
            'categoria' => 'quotidiano',
            'trailer' => 'MorangosComAcucar.mp4',
            'Episodios' => '2611',
            'Temporadas' => '9',
            'Diretor' =>'Tim Burton',
            'Editora' =>'TVI',
            'CE'=> 'M/12',
            'sinopse' => 'Esta novela acompanha a rotina e os problemas diários de um grupo de adolescentes portugueses.',
        ]);

        Film::create([
            'title' => 'The Office',
            'slug' => 'TheOffice',
            'banner' => 'TheOffice.jpg',
            'image' => 'TheOffice.jpg',
            'falas' => "That's what she said!",
            'Data' => '24/3/2005',
            'tipo' => 'serie',
            'categoria' => 'Sitcom',
            'trailer' => 'TheOffice.mp4',
            'Episodios' => '188',
            'Temporadas' => '9',
            'Diretor' =>'Greg Daniels, Ricky Gervais, Stephen Merchant',
            'Editora' =>'NBC',
            'CE'=> 'M/12',
            'sinopse' => 'Uma comedia para todos aqueles que tem um Patrão idiota.',
        ]);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        Film::create([
            'title' => 'Pi100Pé Gondomar - Quim Roscas e Zecas Estacionâncio',
            'slug' => 'GondomarQuimRoscas',
            'image' => 'QuimRoscas_Gondomar.jpg',
            'Falas' => 'Vibradores ou ou ou, vira o cu que eu já lá vou',    
            'Data' => '10/10/2023',
            'tipo'=> 'video',
            'Escolhido'=> 'sim',
            'categoria' => 'comedia',
            'trailer' => 'Gondomar-QuimRoscas.mp4',
            'Editora' => 'Fernando Rocha',
            'Diretor' => 'Quim Roscas e Zecas Estacionâncio',
            'CE'=> 'M/12',
            'sinopse' => 'Comedia do grupo Pi 100 Pé feita em Gondomar, piada do Quim Roscas e Zeca Estacionâncio',
        ]);

        Film::create([
            'title' => 'Pi100Pé Gondomar - Fernando Rocha',
            'slug' => 'GondomarFernandoRocha',
            'image' => 'FernandoRocha_Gondomar.jpg',
            'Falas' => 'A minha mulher disse-me que eu sou um mestre na cama. E eu: "Claro, sou mestre em adormecer em qualquer parte da cama!"',    
            'Data' => '10/10/2023',
            'tipo'=> 'video',
            'categoria' => 'comedia',
            'trailer' => 'Gondomar-FernadoRocha.mp4',
            'Diretor' => 'Fernando Rocha',
            'Editora' => 'Fernando Rocha',
            'CE'=> 'M/12',
            'sinopse' => 'Comedia do grupo Pi 100 Pé feita em Gondomar, piada do Fernando Rocha',
        ]);


    }
}
