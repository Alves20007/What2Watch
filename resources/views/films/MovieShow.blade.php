<x-guestLayout>
<head>
    <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
</head>
<body>

    <div class="absolute top-40 right-4">
        <a href="{{ route('filmes', ['id' => $film->id]) }}" 
           class="bg-blue-500 text-white px-4 py-2 rounded-full shadow hover:bg-bue-600 transition">
            + Ver Depois
        </a>
    </div>
    
    <!-- Introdução -->
    <section class="intro">
        <h1 class="text-yellow-600">{{ $film->title }}</h1>
        <p>{{ $film->Falas }}</p>
    </section>

    <!-- Seção 1: Texto à esquerda, imagem à direita -->
    <section class="section">
        <div class="image">
            <img class="h-64 object-cover" src="/images/{{ $film->image }}">
        </div>
        <div class="text">
            <h2>Sínopse do {{$film->tipo}}</h2>
            <p>temp: {{$film ->Temporadas}}</p>
            <P>Epi:{{$film->Episodios}}</P>
            <p>Sin: {{$film->sinopse}}</p>

        </div>
    </section>

    <section class="section">
        <div class="text">
            <h2>Trailer do filme {{ $film->title}}</h2>
        </div>
        <video width="400" controls>
            <source src="/video/{{ $film->trailer }}" type="video/mp4">
            <!--<source src="/imagens/ogg/{{ $film->audio }}" type="video/ogg"> -->
            Your browser does not support HTML video.
          </video>
    </section>

    <!-- Melhorar a secçao de avaliação para depois-->
    <section class="section mt-10">
        <h2 class="text-xl font-bold mb-4">Avaliação</h2>
        <form action="{{ route('filmes', ['id' => $film->id]) }}" method="POST">
            @csrf
            <div class="flex space-x-2 mb-4">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" class="hidden" />
                    <label for="star{{ $i }}" class="cursor-pointer text-3xl text-gray-400 hover:text-yellow-400">&#9733;</label>
                @endfor
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Avaliar</button>
        </form>
    </section>

    <!-- Fazer os Comentários Depois -->
</body>
</x-guestLayout>