<x-guestLayout>
<head>
    <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
</head>
<body>

    <!-- Introdução -->
    <section class="intro">
        <h1>a{{ $film->title }}</h1>
        <p>Justice for gothen!</p>
    </section>

    <!-- Seção 1: Texto à esquerda, imagem à direita -->
    <section class="section">
        <div class="image">
            <img class="h-64 object-cover" src="/images/films/{{ $film->image }}">
        </div>
        <div class="text">
            <h2>Sínopse do filme</h2>
            <p>{{$film->sinopse}}</p>
        </div>
    </section>

    <section class="section">
        <div class="text">
            <h2>Trailer do filme {{ $film->title}}</h2>
        </div>
        <video width="400" controls>
            <source src="/imagens/video/{{ $film->trailer }}" type="video/mp4">
            <!--<source src="/imagens/ogg/{{ $film->audio }}" type="video/ogg"> -->
            Your browser does not support HTML video.
          </video>
    </section>

    <section class="section">
        <div class="image">
            <img src="imagens/filmes2/IJ.jpg" alt="telemovel tecnologico">
        </div>
        <div class="text">
            <h2>aqui vai ser o campo dos atores

            </h2>
            <p>Aqui o utilizador vai poder colocar imagens, e depois vai ser salvo na DB</p>
        </div>
    </section>
    <section class="section">
        <div class="text">
            <h2>Aqui vai ser as celebridades</h2>
            <p>Colocar as fotos quanto as suas respectivas fotos e infos talvez fazer isso em cima</p>
        </div>
        <div class="image">
            <img src="images/imagem1.jpg" alt="Imagem 1">
        </div>
    </section>
    
</body>
</x-guestLayout>