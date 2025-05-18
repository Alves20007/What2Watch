<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Film;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oscar_id = Category::where('slug', 'oscar')->first()->id;
        

        $actor1 = Actor::create([
           'FullName' => 'Robert Douglas Thomas Pattinson',
           'sexo' => 'Masculino',
           'Name' => 'Robert Pattinson',
           'banner' => 'atoresFelizes.jpg',
           'image' => 'Robert_Pattinson.jpg',
           'Frase' => 'People who are the most normal are probably the most crazy.',
           'birthday' => '13/5/2025',
           'country' => 'Reino Unido',
           'profissao' => 'Ator',
           'Slug' => 'RobertDouglasThomasPattinson',
           'bio' => ' Robert Pattinson é um ator inglês conhecido por sua versatilidade em produções de grande estúdio e filmes independentes. Ganhou destaque internacional ao interpretar Edward Cullen na saga "Twilight" e mais recentemente assumiu o papel de Bruce Wayne/Batman em "The Batman" (2022).',
        ]);

        $actor2 = Actor::create([
            'FullName' => 'Andrew Clement Serkis',
            'sexo' => 'Masculino',
            'Name' => 'Andrew Serkis',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Andy_Serkis.jpg',
            'Frase' => 'Be magnificent. Life’s short. Get out there. You can do it. Everyone can do it. Everyone.',
            'birthday' => '20/4/1964',
            'country' => 'Reino Unido',
            'profissao' => 'Ator',
            'Slug' => 'AndrewClementSerkis',
            'bio' => ' Andy Serkis é um ator e cineasta britânico renomado por seu trabalho pioneiro em captura de movimento, dando vida a personagens como Gollum em "The Lord of the Rings", Caesar em "Planet of the Apes" e Snoke em "Star Wars". Também dirigiu filmes como "Mowgli: Legend of the Jungle" e "Venom: Let There Be Carnage".',
         ]);

        $actor3 = Actor::create([
            'FullName' => 'Colin James Farrell',
            'sexo' => 'Masculino',
            'Name' => 'Colin Farrell',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Coling_Farrell.jpg',
            'Frase' => 'Desperation will allow you to do incredible things in the name of survival.',
            'birthday' => '31/5/1976',
            'country' => 'Irlanda',
            'profissao' => 'Ator',
            'Slug' => 'ColinJamesFarrell',
            'bio' => '  Colin Farrell é um ator irlandês que ganhou reconhecimento por suas atuações em filmes como "Tigerland", "Minority Report", "In Bruges" e "The Banshees of Inisherin". Recebeu vários prêmios, incluindo três Globos de Ouro, e foi nomeado uma das 100 pessoas mais influentes do mundo pela revista Time em 2023',
         ]);
 
        $actor4 = Actor::create([
            'FullName' => 'Jeffrey Wright',
            'sexo' => 'Masculino',
            'Name' => 'Jeffrey Wright',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Jeffrey_Wright.jpg',
            'Frase' => 'The reason why things work is because of love.',
            'birthday' => '07/12/1965',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'JeffreyWright',
            'bio' => 'Jeffrey Wright é um ator americano premiado, conhecido por seus papéis em "Angels in America", "Basquiat", "Westworld" e como Jim Gordon em "The Batman" (2022). Recebeu um Emmy, um Tony e um Globo de Ouro, além de uma indicação ao Oscar por "American Fiction" (2023).'         
        ]);

        //Filme do Batman
        $filmBatman = Film::where('slug', 'batman')->first();

        $filmBatman->actors()->attach([
            $actor1->id => ['personagem' => 'Bruce Wayne'],
            $actor2->id => ['personagem' => 'Alfred'],
            $actor3->id => ['personagem' => 'Pinguim'],
            $actor4->id => ['personagem' => 'James Gordon'],
        ]);
        
        $elenco = $filmBatman->actors->pluck('Name')->implode(', ');
        $filmBatman->elenco = $elenco;
        $filmBatman->save();

        $actor5 = Actor::create([
            'FullName' => 'James Eugene Carrey',
            'sexo' => 'Masculino',
            'Name' => 'Jim Carrey',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Jim_Carrey.jpg',
            'Frase' => 'Life opens up opportunities to you, and you either take them or you stay afraid of taking them.',
            'birthday' => '17/01/1962',
            'country' => 'Canadá',
            'profissao' => 'Ator',
            'Slug' => 'JamesEugeneCarrey',
            'bio' => 'Jim Carrey é um ator e comediante canadense-americano conhecido por seu estilo de humor físico e expressivo. Ganhou destaque em "In Living Color" e estrelou filmes de sucesso como "Ace Ventura", "O Máskara", "O Show de Truman" e "Brilho Eterno de uma Mente Sem Lembranças". Seu trabalho lhe rendeu diversos prêmios e reconhecimento internacional. '         
        ]);

        $actor6 = Actor::create([
            'FullName' => 'Kate Elizabeth Winslet',
            'sexo' => 'Femenino',
            'Name' => 'Kate Winslet',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Kate_Winslet.jpg',
            'Frase' => "If being crazy means living life as if it matters, then I don't mind being completely insane.",
            'birthday' => '05/10/1975',
            'country' => 'Reino Unido',
            'profissao' => 'Ator',
            'Slug' => 'JeffreyWright',
            'bio' => ' Kate Winslet é uma atriz britânica renomada, conhecida por suas atuações em filmes como "Titanic", "O Leitor" e "Brilho Eterno de uma Mente Sem Lembranças". Iniciou sua carreira ainda jovem e rapidamente se destacou por sua versatilidade e profundidade emocional em papéis complexos.'         
        ]);

        $actor7 = Actor::create([
            'FullName' => 'Thomas Geoffrey Wilkinson',
            'sexo' => 'Masculino',
            'Name' => 'Thomas Wilkinson',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Tim_Wikilson.jpg',
            'Frase' => 'The reason why things work is because of love.',
            'birthday' => '05/02/1948',
            'falecimento'=> '30/12/2023',
            'country' => 'Reino Unido',
            'profissao' => 'Ator',
            'Slug' => 'ThomasGeoffreyWilkinson',
            'bio' => 'Tom Wilkinson foi um ator britânico aclamado, conhecido por seus papéis em "The Full Monty", "Michael Clayton" e "Brilho Eterno de uma Mente Sem Lembranças". Recebeu várias indicações ao Oscar e ganhou prêmios como o Globo de Ouro e o Emmy. Sua carreira foi marcada por performances intensas e memoráveis.'         
        ]);

        $actor8 = Actor::create([
            'FullName' => 'Elijah Jordan Wood',
            'sexo' => 'Masculino',
            'Name' => 'Jeffrey Wright',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Elihah_Wood.jpg',
            'Frase' => 'My God! Middle Earth does exist!',
            'birthday' => '28/01/1981',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'ElijahJordanWood',
            'bio' => 'Elijah Wood é um ator americano que começou sua carreira ainda criança. Tornou-se mundialmente famoso ao interpretar Frodo Baggins na trilogia "O Senhor dos Anéis". Além disso, participou de filmes como "Brilho Eterno de uma Mente Sem Lembranças" e "Sin City", demonstrando sua versatilidade como ator.'         
        ]);


        $FilmEternal = Film::where('slug', 'eternal')->first();

        $FilmEternal->actors()->attach([
            $actor5->id => ['personagem' => 'Joel'],
            $actor6->id => ['personagem' => 'Clementine'],
            $actor7->id => ['personagem' => 'Dr.Mierzwiak'],
            $actor8->id => ['personagem' => 'Patrick'],

        ]);
        
        $elenco = $FilmEternal->actors->pluck('Name')->implode(', ');
        $FilmEternal->elenco = $elenco;
        $FilmEternal->save();


        $actor9 = Actor::create([
            'FullName' => 'Robert John Downey Jr.',
            'sexo' => 'Masculino',
            'Name' => 'Robert Downey Jr.',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Robert_Downey_Jr.jpg',
            'Frase' => 'My God! Middle Earth does exist!',
            'birthday' => '4/04/1965',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'RobertJohnDowneyJr',
            'bio' => 'Robert Downey Jr. é um ator americano que iniciou sua carreira ainda criança, atuando em filmes dirigidos por seu pai, Robert Downey Sr. Após enfrentar desafios pessoais relacionados ao abuso de substâncias, ele ressurgiu como um dos atores mais respeitados de Hollywood. Ganhou aclamação por seu papel como Tony Stark/Iron Man no Universo Cinematográfico Marvel e conquistou o Oscar de Melhor Ator Coadjuvante por sua atuação em "Oppenheimer" (2023).'         
        ]);

        $actor10 = Actor::create([
            'FullName' => 'Christopher Robert Evans',
            'sexo' => 'Masculino',
            'Name' => 'Chris Evans',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Chris_Evans.jpg',
            'Frase' => "I think it's important to love yourself. I think it's important to be proud of who you are and what you do",
            'birthday' => '13/07/1981',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'ChristopherRobertEvans',
            'bio' => 'Chris Evans é um ator americano que ganhou reconhecimento internacional ao interpretar Steve Rogers/Capitão América no Universo Cinematográfico Marvel. Além disso, atuou em filmes como "Knives Out" e "Snowpiercer.'         
        ]);
        $actor11 = Actor::create([
            'FullName' => 'Mark Alan Ruffalo',
            'sexo' => 'Masculino',
            'Name' => 'Mark Ruffalo',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Mark_ruffalo.jpg',
            'Frase' => 'A lot of people are living with mental illness around them. Either you love one or you are one.',
            'birthday' => '22/11/1967',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'MarkAlanRuffalo',
            'bio' => 'Mark Ruffalo é um ator americano conhecido por sua atuação como Bruce Banner/Hulk no Universo Cinematográfico Marvel. Também recebeu aclamação da crítica por papéis em filmes como "Spotlight" e "The Kids Are All Right.'         
        ]);
        $actor12 = Actor::create([
            'FullName' => 'Christopher Hemsworth',
            'sexo' => 'Masculino',
            'Name' => 'Chris Hemsworth',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Chris_Hemsworth.jpg',
            'Frase' => 'As kids, our experiences shape our opinions of ourselves and the world around us.',
            'birthday' => '11/08/1983',
            'country' => 'Austrália',
            'profissao' => 'Ator',
            'Slug' => 'ChristopherHemsworth',
            'bio' => 'Elijah Wood é um ator americano que começou sua carreira ainda criança. Tornou-se mundialmente famoso ao interpretar Frodo Baggins na trilogia "O Senhor dos Anéis". Além disso, participou de filmes como "Brilho Eterno de uma Mente Sem Lembranças" e "Sin City", demonstrando sua versatilidade como ator.Chris Hemsworth é um ator australiano que alcançou fama internacional ao interpretar Thor no Universo Cinematográfico Marvel. Também estrelou filmes como "Rush", "Extraction" e "Furiosa: A Mad Max Saga'         
        ]);
        $FilmEndGame = Film::where('slug', 'AvengerEndgame')->first();

        $FilmEndGame->actors()->attach([
            $actor9->id => ['personagem' => 'Tony Stark'],
            $actor10->id => ['personagem' => 'Chris Evans'],
            $actor11->id => ['personagem' => 'Bruce Banner'],
            $actor12->id => ['personagem' => 'Thor'],

        ]);
        
        $elenco = $FilmEndGame->actors->pluck('Name')->implode(', ');
        $FilmEndGame->elenco = $elenco;
        $FilmEndGame->save();

        $actor13 = Actor::create([
            'FullName' => 'Iain Armitage',
            'sexo' => 'Masculino',
            'Name' => 'Iain Armitage',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Iain_Armitage.jpg',
            'Frase' => 'I love acting, but I also love watching theater and reviewing it.',
            'birthday' => '15/07/2008',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'RobertJohnDowneyJr',
            'bio' => ' Iain Armitage é um ator americano que ganhou destaque ao interpretar Sheldon Cooper na série "Young Sheldon", um spin-off de "The Big Bang Theory". Também é conhecido por seu papel como Ziggy Chapman em "Big Little Lies". Além da atuação, Iain é apaixonado por teatro e já apresentou críticas teatrais em seu canal no YouTube.'         
        ]);
        $actor14 = Actor::create([
            'FullName' => 'Mckenna Grace',
            'sexo' => 'Femenino',
            'Name' => 'Mckenna Grace',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Mckenna_Grace.jpg',
            'Frase' => "I think it's important to be kind to everyone and to always try your best.",
            'birthday' => '25/06/2006',
            'country' => 'Estados Unidos',
            'profissao' => 'Cantor',
            'Slug' => 'MckennaGrace',
            'bio' => 'Mckenna Grace é uma atriz e cantora americana que começou sua carreira ainda criança. Ela é conhecida por seus papéis em "Gifted", "I, Tonya", "The Haunting of Hill House" e "Ghostbusters: Afterlife". Além da atuação, Mckenna também se dedica à música, tendo lançado singles e EPs que exploram os gêneros pop rock e folk.'         
        ]);

        $actor15 = Actor::create([
            'FullName' => 'Raegan Revord',
            'sexo' => 'Femenino',
            'Name' => 'Raegan Revord',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Raegan_Revord.jpg',
            'Frase' => 'Reading opens up new worlds and helps us understand others better.',
            'birthday' => '3/01/2008',
            'country' => 'Estados Unidos',
            'profissao' => 'Desportista',
            'Slug' => 'RaeganRevord',
            'bio' => 'Raegan Revord é uma atriz americana conhecida por seu papel como Missy Cooper em "Young Sheldon". Além da atuação, ela é apaixonada por literatura e criou o clube do livro online "Read with Raegan", voltado para jovens leitores. Em 2025, está previsto o lançamento de seu primeiro romance jovem adulto, "Rules for Fake Girlfriends".'         
        ]);
        $actor16 = Actor::create([
            'FullName' => 'Montana Jordan',
            'sexo' => 'Masculino',
            'Name' => 'Montana Jordan',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Montana_Jordan.jpg',
            'Frase' => 'Family means everything to me; they keep me grounded.',
            'birthday' => '08/03/2003',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'MontanaJordan',
            'bio' => 'Montana Jordan é um ator americano que ganhou notoriedade ao interpretar Georgie Cooper em "Young Sheldon" e no spin-off "Georgie & Mandy´s First Marriage". Nascido no Texas, Montana é o mais novo de três irmãos e recentemente tornou-se pai de uma menina chamada Emma Rae.'         
        ]);

        $SerieYoungSheldon = Film::where('slug', 'YoungSheldon')->first();

        $SerieYoungSheldon->actors()->attach([
            $actor13->id => ['personagem' => 'Sheldon Cooper'],
            $actor14->id => ['personagem' => 'Paige Swanson'],
            $actor15->id => ['personagem' => 'Missy Cooper'],
            $actor16->id => ['personagem' => 'George Cooper'],

        ]);
        
        $elenco = $SerieYoungSheldon->actors->pluck('Name')->implode(', ');
        $SerieYoungSheldon->elenco = $elenco;
        $SerieYoungSheldon->save();

        $actor17 = Actor::create([
            'FullName' => 'Jenna Marie Ortega',
            'sexo' => 'Femenino',
            'Name' => 'Jenna Ortega',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Jenna_Ortega.jpg',
            'Frase' => "I think it's important to be unapologetically yourself.",
            'birthday' => '27/09/2002',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'JennaMarieOrtega',
            'bio' => ' Jenna Ortega é uma atriz americana que começou sua carreira ainda criança, ganhando destaque em séries como "Jane the Virgin" e "You". Tornou-se amplamente conhecida por interpretar a personagem-título na série "Wednesday" da Netflix, onde também demonstrou suas habilidades como dançarina.'         
        ]);

        $actor18 = Actor::create([
            'FullName' => 'Emma Myers',
            'sexo' => 'Femenino',
            'Name' => 'Emma Myers',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Emma_Myers.jpg',
            'Frase' => "Being different is what makes you special.",
            'birthday' => '2/04/2002',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'EmmaMyers',
            'bio' => 'Emma Myers é uma atriz americana que ganhou reconhecimento por seu papel como Enid Sinclair na série "Wednesday" da Netflix. Sua atuação como a lobisomem extrovertida e melhor amiga de Wednesday Addams foi elogiada por sua energia e carisma.'         
        ]);

        $actor19 = Actor::create([
            'FullName' => 'Joy Sunday',
            'sexo' => 'Femenino',
            'Name' => 'Joy Sunday',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Joy_Sunday.jpg',
            'Frase' => "Art is a reflection of our deepest truths.",
            'birthday' => '25/04/1996',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'JoySunday',
            'bio' => 'Joy Sunday é uma atriz americana que se destacou por seu papel como Bianca Barclay na série "Wednesday" da Netflix. Além de sua atuação, Joy também é conhecida por seu trabalho como produtora e diretora em projetos independentes.'         
        ]);

        $actor20 = Actor::create([
            'FullName' => 'Hunter Doohan',
            'sexo' => 'Masculino',
            'Name' => 'Hunter Doohan',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Hunter_Doohan.jpg',
            'Frase' => "Embracing vulnerability is the key to authentic storytelling.",
            'birthday' => '19/01/1994',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'HunterDoohan',
            'bio' => 'Hunter Doohan é um ator americano conhecido por seu papel como Tyler Galpin na série "Wednesday" da Netflix. Ele também atuou em séries como "Your Honor" e "Truth Be Told", demonstrando sua versatilidade como ator.'         
        
        ]);
        $SerieWednesday = Film::where('slug', 'Wednesday')->first();

        $SerieWednesday->actors()->attach([
            $actor17->id => ['personagem' => 'Wednesday Adams'],
            $actor18->id => ['personagem' => 'Enid Sinclair'],
            $actor19->id => ['personagem' => 'Bianca Barclay'],
            $actor20->id => ['personagem' => 'Tyler Galpin'],

        ]);
        
        $elenco = $SerieWednesday->actors->pluck('Name')->implode(', ');
        $SerieWednesday->elenco = $elenco;
        $SerieWednesday->save();

        $actor21 = Actor::create([
            'FullName' => 'David A. J. Samberg',
            'sexo' => 'Masculino',
            'Name' => 'Andy Samberg',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Andy_Samberg.jpg',
            'Frase' => "I think if you can be funny, it makes you more likable.",
            'birthday' => '18/08/1978',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'DavidA.J.Samberg',
            'bio' => ' Andy Samberg é um comediante, ator, músico, escritor e produtor americano. Ganhou destaque como membro do elenco do "Saturday Night Live" de 2005 a 2012, onde popularizou os "SNL Digital Shorts" com seu grupo de comédia musical The Lonely Island. Também é conhecido por seu papel como Jake Peralta na série "Brooklyn Nine-Nine" (2013–2021).'         
        ]);

        $actor22 = Actor::create([
            'FullName' => 'Joseph Vincent Lo Truglio',
            'sexo' => 'Masculino',
            'Name' => 'Joe Lo Truglio',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'JoeLoTruglio.jpg',
            'Frase' => "Being different is what makes you special.",
            'birthday' => '2/12/1972',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'JosephVicentLoTruglio',
            'bio' => ' Joe Lo Truglio é um ator e comediante americano, conhecido por seu papel como Charles Boyle na série "Brooklyn Nine-Nine". Também participou de séries como "The State" e "Reno 911!", além de filmes como "Superbad", "I Love You, Man" e "Role Models".'         
        ]);

        $actor23 = Actor::create([
            'FullName' => 'Terry Alan Crews',
            'sexo' => 'Masculino',
            'Name' => 'Terry Crews',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Terry_Crews.jpg',
            'Frase' => "The best you can do is be honest and let people see the real you.",
            'birthday' => '30/07/1968',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'TerryAlanCrews',
            'bio' => 'Terry Crews é um ator e ex-jogador de futebol americano. Após sua carreira na NFL, tornou-se conhecido por seus papéis em filmes de comédia e por interpretar Terry Jeffords na série "Brooklyn Nine-Nine". Também é apresentador do programa "Americas Got Talent". '         
        ]);

        $actor24 = Actor::create([
            'FullName' => 'Melissa Gallo Fumero',
            'sexo' => 'Masculino',
            'Name' => 'Melissa Fumero',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Melissa_Fumero.jpg',
            'Frase' => "Representation matters, and I’m proud to be part of that change.",
            'birthday' => '19/08/1982',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'MelissaGalloFumero',
            'bio' => 'Melissa Fumero é uma atriz americana conhecida por seu papel como Amy Santiago na série "Brooklyn Nine-Nine". Iniciou sua carreira na novela "One Life to Live" e também trabalhou como diretora de televisão.'         
        
        ]);

        $SerieBrokklyn99 = Film::where('slug', 'broklyn99')->first();

        $SerieBrokklyn99->actors()->attach([
            $actor21->id => ['personagem' => 'Jake Peralta'],
            $actor22->id => ['personagem' => 'Charles Boyle'],
            $actor23->id => ['personagem' => 'Terry Jefford'],
            $actor24->id => ['personagem' => 'Amy Santiago'],

        ]);
        
        $elenco = $SerieBrokklyn99->actors->pluck('Name')->implode(', ');
        $SerieBrokklyn99->elenco = $elenco;
        $SerieBrokklyn99->save();

        $actor25 = Actor::create([
            'FullName' => 'William John Neeson',
            'sexo' => 'Masculino',
            'Name' => 'William Neeson',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'William_Neeson.jpg',
            'Frase' => "I will find you, and I will kill you.",
            'birthday' => '7/06/1952',
            'country' => 'Irlanda do Norte',
            'profissao' => 'Ator',
            'Slug' => 'WilliamJohnNeeson',
            'bio' => ' Ator norte-irlandês conhecido por seus papéis em filmes como Schindlers List, Taken e Star Wars: Episódio I – A Ameaça Fantasma, onde interpretou Qui-Gon Jinn.'        
        ]);

         $actor26 = Actor::create([
            'FullName' => 'Ewan Gordon McGregor',
            'sexo' => 'Masculino',
            'Name' => 'Ewan McGregor',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Ewan_McGregor.jpg',
            'Frase' => "May the Force be with you.",
            'birthday' => '31/03/1971',
            'country' => 'Escócia',
            'profissao' => 'Ator',
            'Slug' => 'EwanGordonMcGregor',
            'bio' => 'Ator escocês que ganhou destaque com Trainspotting e ficou mundialmente conhecido por interpretar Obi-Wan Kenobi na trilogia prequela de Star Wars.'        
        ]);

         $actor27 = Actor::create([
            'FullName' => 'Natalie Hershlag',
            'sexo' => 'Femenino',
            'Name' => 'Natalie Hershlag',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Natalie_Hershlag.jpg',
            'Frase' => "So this is how liberty dies... with thunderous applause.",
            'birthday' => '9/06/1981',
            'country' => 'Israel',
            'profissao' => 'Ator',
            'Slug' => 'NatalieHershlag',
            'bio' => 'Atriz israelense-americana vencedora do Oscar por Black Swan. Iniciou sua carreira em Léon: The Professional e interpretou Padmé Amidala na trilogia prequela de Star Wars.'        
        ]);

        $actor28 = Actor::create([
            'FullName' => 'Jake Matthew Lloyd',
            'sexo' => 'Masculino',
            'Name' => 'Jake Lloyd',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Jake_Lloyd.jpg',
            'Frase' => "Now this is podracing!",
            'birthday' => '5/03/1989',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'WilliamJohnNeeson',
            'bio' => 'Ator infantil americano que interpretou o jovem Anakin Skywalker em Star Wars: Episódio I – A Ameaça Fantasma. Após o filme, retirou-se da atuação.'        
        ]);

        $actor29 = Actor::create([
            'FullName' => 'Hayden Christensen',
            'sexo' => 'Masculino',
            'Name' => 'Hayden Christensen',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Hayden_Christensen.jpg',
            'Frase' => "I hate sand. It's coarse and rough and irritating, and it gets everywhere.",
            'birthday' => '19/04/1981',
            'country' => 'Canadá',
            'profissao' => 'Ator',
            'Slug' => 'HaydenChristensen',
            'bio' => 'Ator canadense conhecido por interpretar Anakin Skywalker em Star Wars: Episódio II e III, além de retornar ao papel em séries recentes.'        
        ]);

        $actor30 = Actor::create([
            'FullName' => 'Mark Richard Hamill',
            'sexo' => 'Masculino',
            'Name' => 'Mark Hamill',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Mark_Hamill.jpg',
            'Frase' => "I'm Luke Skywalker. I'm here to rescue you.",
            'birthday' => '25/09/1951',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'MarkRichardHamill',
            'bio' => 'Ator americano famoso por interpretar Luke Skywalker na saga Star Wars e por seu trabalho como dublador do Coringa em animações da DC.'        
        ]);

        $actor28 = Actor::create([
            'FullName' => 'Harrison Ford',
            'sexo' => 'Masculino',
            'Name' => 'Harrison Ford',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Harrison_Ford.jpg',
            'Frase' => "Never tell me the odds.",
            'birthday' => '13/07/1942',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'HarrisonFord',
            'bio' => 'Ator americano conhecido por seus papéis icônicos como Han Solo em Star Wars e Indiana Jones na franquia homônima.'        
        ]);

        $actor28 = Actor::create([
            'FullName' => 'Jake Matthew Lloyd',
            'sexo' => 'Masculino',
            'Name' => 'Jake Lloyd',
            'banner' => 'atoresFelizes.jpg',
            'image' => 'Jake_Lloyd.jpg',
            'Frase' => "Now this is podracing!",
            'birthday' => '5/03/1989',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'WilliamJohnNeeson',
            'bio' => 'Ator infantil americano que interpretou o jovem Anakin Skywalker em Star Wars: Episódio I – A Ameaça Fantasma. Após o filme, retirou-se da atuação.'        
        ]);
    }
}
