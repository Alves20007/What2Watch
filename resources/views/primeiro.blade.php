<!DOCTYPE html>
<html lang="pt">
<head>
    <x-header />
    <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="What2Watch - Descubra novos filmes e séries e compartilhe sua opinião.">
    <title>What2Watch</title>
</head>
<body>

    <!-- Introdução -->
    <header class="intro">
        <h1>What2Watch</h1>
        <p>Onde o seu entretenimento é o nosso dever!</p>

<!-- Barra de Pesquisa -->
        <div class="flex justify-center mt-4">
            <form action="{{ route('search') }}" method="GET" class="flex text-neutral-800 gap-2 w-[800px] max-w-full">
                <input 
                    type="text" 
                    name="query" 
                    placeholder="Pesquisar filmes, atores ou utilizadores..." 
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg"
                >
                <button 
                    type="submit" 
                    class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600  w-[100px]"
                >
                🔍
                </button>
            </form>
        </div>

    </header>

    <!-- Seção 1: Filme do dia -->
    <section class="section">
        <div class="text">
            <h1>O filme do dia é <strong>{{ $film->title }}</strong></h1>
            <p>{{ $film->sinopse }}</p>
        </div>
        <video width="400" controls>
            <source src="/video/{{ $film->trailer }}" type="video/mp4">
            Your browser does not support HTML video.
        </video>
    </section>

    <!-- Seção 2: Futuras Updates -->
    <section class="section">
        <div class="image">
            <img src="imagens/filmes2/IJ.jpg" alt="Telemóvel tecnológico">
        </div>
        <div class="text">
            <h2>Update Logs</h2>
            <p>Update do dia Arroz com feijao é bom</p>
        </div>
    </section>
    <!-- Rodapé -->
    <x-footer />

</body>
</html>