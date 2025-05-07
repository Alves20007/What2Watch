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
            'image' => 'Robert_Downey_Jr .jpg',
            'Frase' => 'My God! Middle Earth does exist!',
            'birthday' => '4/04/1965',
            'country' => 'Estados Unidos',
            'profissao' => 'Ator',
            'Slug' => 'RobertJohnDowneyJr',
            'bio' => 'Robert Downey Jr. é um ator americano que iniciou sua carreira ainda criança, atuando em filmes dirigidos por seu pai, Robert Downey Sr. Após enfrentar desafios pessoais relacionados ao abuso de substâncias, ele ressurgiu como um dos atores mais respeitados de Hollywood. Ganhou aclamação por seu papel como Tony Stark/Iron Man no Universo Cinematográfico Marvel e conquistou o Oscar de Melhor Ator Coadjuvante por sua atuação em "Oppenheimer" (2023).'         
        ]);

        $actor10 = Actor::create([
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
        $actor11 = Actor::create([
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
        $actor12 = Actor::create([
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

        
    }
}
