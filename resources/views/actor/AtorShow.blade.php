<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>
    <body>
    
        <!-- Introdução -->
        <section class="intro">
            <h1>{{ $ator->Name }}</h1>
            <p>{{ $ator->Frase}}</p>
        </section>
    
        <!-- Seção 1: Texto à esquerda, imagem à direita -->
        <section class="section">
            <div class="image">
                <img class="h-64 object-cover" src="/imagens/atores/{{ $ator->image }}">
            </div>
            <div class="text">
                <h2>Historia do ator register</h2>
                <p>{{$ator->Historia}}</p>
            </div>
        </section>
    
        <section class="section">
            <div class="text">
                <h2>Info geral sobre {{ $ator->Name}}</h2>
            </div>
            <div class="text">
                <b>Nome completo: {{ $ator->FullName}}</b> <br>
                <b>Local de Nascimento:</b> <br>
                <b>Dia do seu nascimento: {{ $ator->birthday}}</b> <br>
                </var>
                
            </div>
        </section>

        <section class="section">
            <video width="400" controls>
                <source src="/imagens/video/{{ $ator->trailer }}" type="video/mp4">
                <!--<source src="/imagens/ogg/{{ $ator->audio }}" type="video/ogg"> -->
                Your browser does not support HTML video.
              </video>
            <div class="text">
                <h2> decomentario do ator? algo do genero {{ $ator->title}}</h2>
            </div>
        </section>
    
    
        <section class="section">
            <div class="image">
                <img src="imagens/atores2/IJ.jpg" alt="telemovel tecnologico">
            </div>
            <div class="text">
                <h2>aqui vai ser o campo das fotos dos atores
    
                </h2>
                <p>As fotos podem ser em contexto do filme, pode ser no contexto profissional etc</p>
            </div>
        </section>
        <section class="section">
            <div class="text">
                <h2>Aqui vai ser os filmes no qual atuou</h2>
                <p>filmes no qual ele participou/dirigiu</p>
            </div>
            <div class="image">
                <img src="images/imagem1.jpg" alt="Imagem 1">
            </div>
        </section>
        
    </body>
    </x-guestLayout>