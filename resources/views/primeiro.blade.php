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
            <p>Quem é que se da ao trabalho de ler isto?</p>
        </div>
    </section>

    {{-- <!-- Seção 3: Objetivo do Site -->
    <section class="section">
        <div class="text">
            <h2>Objetivo do Site</h2>
            <p>{{ $film->atores }}</p>
            <p>O meu principal objetivo é criar um site onde o utilizador possa descobrir novos filmes e séries e dar a sua opinião.</p>
            <p>Nota: A imagem deve ser do género de pessoas a assistirem a algo.</p>
        </div>
        <div class="image">
            <img src="images/imagem1.jpg" alt="Pessoas assistindo a um filme">
        </div>
    </section> --}}

    <!-- Rodapé -->
    <x-footer />

</body>
</html>