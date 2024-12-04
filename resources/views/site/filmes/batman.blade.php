<head>
    <x-header />
    <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
</head>
<body>

    <!-- Introdução -->
    <section class="intro">
        <h1>The Batman</h1>
        <p>Justice for gothen!</p>
    </section>

    <!-- Seção 1: Texto à esquerda, imagem à direita -->
    <section class="section">
        <div class="image">
            <img src="imagens/filmes/batman.png" alt="capa do filme">
        </div>
        <div class="text">
            <h2>Futuras Updates</h2>
            <p>Quando um serial killer sádico começa a assassinar figuras políticas importantes em Gotham, o Batman é forçado a investigar a corrupção oculta da cidade e a questionar o envolvimento de sua família.</p>
        </div>
    </section>

    <section class="section">
        <div class="text">
            <h2>trailer do filme</h2>
            <p>O meu principal Objetivo é criar um site onde o utilizador possa descobrir novos filmes e series e dar a sua opiniao.</p>
            <p>Nota a imagem tem de ser do genero de pessoas a assistirem algo</p>
        </div>
        <video width="400" controls>
            <source src="imagens/video/the-batman.mp4" type="video/mp4">
            <source src="imagens/video/the-batman.ogg" type="video/ogg">
            Your browser does not support HTML video.
          </video>
    </section>

    <section class="section">
        <div class="image">
            <img src="imagens/filmes2/IJ.jpg" alt="telemovel tecnologico">
        </div>
        <div class="text">
            <h2>Bloco das imagens</h2>
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
<x-footer />
