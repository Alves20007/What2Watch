<head>
    <x-header />
    <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
</head>
<body>

    <!-- Introdução -->
    <section class="intro">
        <h1>What2Watch</h1>
        <p>Onde o seu entertenimento é o nosso dever!</p>
    </section>

    <!-- Seção 1: Texto à esquerda, imagem à direita -->
    <section class="section">
        <div class="text">
            <h1>O filme do dia é <b>{{ $film->title }}</b></h1>
            <p>(O video ao lado é o trailer)  {{ $film->sinopse}}</p>
        </div>
        <video width="400" controls>
        <source src="/imagens/video/{{ $film->trailer }}" type="video/mp4">
            Your browser does not support HTML video.
          </video>
    </section>
    <section class="section">
        <div class="image">
            <img src="imagens/filmes2/IJ.jpg" alt="telemovel tecnologico">
        </div>
        <div class="text">
            <h2>Futuras Updates</h2>
            <p>celebs.</p>
        </div>
    </section>
    <section class="section">
        <div class="text">
            {{ $film->atores}}
            {{-- <h2>Objetivo do Site {{ $film->atores->slug}}</h2> --}}
            <p>O meu principal Objetivo é criar um site onde o utilizador possa descobrir novos filmes e series e dar a sua opiniao.</p>
            <p>Nota a imagem tem de ser do genero de pessoas a assistirem algo</p>
        </div>
        <div class="image">
            <img src="images/imagem1.jpg" alt="Imagem 1">
        </div>
    </section>
    
</body>
<x-footer />
