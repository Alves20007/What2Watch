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
            'banner'=> 'batmanBanner.jfif',
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
            'slug' => 'brok',
            'image' => 'broklyn99.jpg',
            'Falas' => 'The only useful thing I did today was take a Buzzfeed quiz about what kind of onion I am.',    
            'Data' => '4/11/2022',
            'tipo'=> 'serie',
            'categoria' => 'acao',
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
            'title' => 'Como abrir uma porta',
            'slug' => 'madjimby',
            'image' => 'MadjimbiPorta.jpg',
            'Falas' => 'Olá!',    
            'Data' => '4/11/2022',
            'tipo'=> 'video',
            'categoria' => 'comedia',
            'trailer' => 'porta.mp4',
            'Editora' => 'Madjimby',
            'Diretor' => 'Madjimby',
            'CE'=> 'M/6',
            'sinopse' => 'Hoje vou ensinar a fechar uma porta',
        ]);

        Film::create([
            'title' => 'Pi100Pé Gondomar - João Dantas',
            'slug' => 'GondomarJoaoDantes',
            'image' => 'Gondomar-JoaoDantes.jpg',
            'Falas' => 'Comprei um relógio de luxo, mas agora estou em cima da hora. A única coisa que ele me ensina é a hora de ser pobre!',    
            'Data' => '10/10/2023',
            'tipo'=> 'video',
            'categoria' => 'comedia',
            'trailer' => 'Gondomar-JoaoDantes.mp4',
            'Editora' => 'Fernando Rocha',
            'Diretor' => 'João Dantes',
            'CE'=> 'M/12',
            'sinopse' => 'Comedia do grupo Pi 100 Pé feita em Gondomar, piada do João Dantas',
        ]);

        Film::create([
            'title' => 'Pi100Pé Gondomar - Quim Roscas e Zecas Estacionâncio',
            'slug' => 'GondomarQuimRoscas',
            'image' => 'Gondomar-QuimRoscas.jpg',
            'Falas' => 'Vibradores ou ou ou, vira o cu que eu já lá vou',    
            'Data' => '10/10/2023',
            'tipo'=> 'video',
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
            'image' => 'MadjimbiPorta.jpg',
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

        Film::create([
            'title' => 'Salta Joca!!',
            'slug' => 'SaltaJoca',
            'image' => 'SaltaJoca.jpg',
            'Falas' => 'Tas a ver não doi salta Joca anda lá',    
            'Data' => '15/08/2019',
            'tipo'=> 'video',
            'categoria' => 'comedia',
            'trailer' => 'SaltaJoca.mp4',
            'Diretor' => 'Gravador do Joca',
            'Editora' =>'Rosquilho Gameplays',
            'CE'=> 'M/6',
            'sinopse' => 'Uma Historia deveras bonitas sobre um Rapaz e o seu sonho de saltar',
        ]);

        Film::create([
            'title' => 'EPÁ, Leave me Alone!!!',
            'slug' => 'JoseCasteloBranco',
            'image' => 'LeaveMeAlone.jpg',
            'Falas' => 'EPÁ, Leave me Alone!!!',    
            'Data' => '6/06/2011',
            'tipo'=> 'video',
            'categoria' => 'comedia',
            'trailer' => 'LeaveMeAlone.mp4',
            'Diretor' => 'Jose Castelo Branco',
            'Editora' =>'TVI',
            'CE'=> 'M/6',
            'sinopse' => 'Apenas um Homem simples e suas simplicidades',
        ]);

        Film::create([
            'title' => 'Na mecânica e também ando no roubo',
            'slug' => 'MecanicoLadrao',
            'image' => 'MecanicoLadrao.jpg',
            'Falas' => 'Eu ando na mecânica e também ando no roubo',    
            'Data' => '30/03/2016',
            'tipo'=> 'video',
            'categoria' => 'comedia',
            'trailer' => 'MecanicoLadrao.mp4',
            'Diretor' => 'Mecanico',
            'Editora' =>'TVI',
            'CE'=> 'M/6',
            'sinopse' => 'Apenas um Homem simples e seus Objetivos de vida',
        ]);

        Film::create([
            'title' => 'Conheces o Mario',
            'slug' => 'MarioArmario',
            'image' => 'MarioArmario.jpg',
            'Falas' => 'OW...Você conhece o Mario?',    
            'Data' => '23/11/2006',
            'tipo'=> 'video',
            'categoria' => 'comedia',
            'trailer' => 'MarioArmario.mp4',
            'Diretor' => 'Paulo',
            'Editora' =>'Paulo el Mario',
            'CE'=> 'M/6',
            'sinopse' => 'Dois rapazes a falarem da vida alheia ate que um decide pregar uma peça ao outro',
        ]);

    }
}
