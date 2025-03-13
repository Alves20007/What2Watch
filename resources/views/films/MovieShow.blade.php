<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>
    <body>
        @if (Auth::check())
        <button onclick="addToWatchLater({{ $film->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-full shadow hover:bg-blue-600 transition">
            + Ver Depois
        </button>
        @else
            <p>Faz login para guardar na lista "Ver Depois"</p>
        @endif
    
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
                <p>Temp: {{$film->Temporadas}}</p>
                <p>Epi: {{$film->Episodios}}</p>
                <p>Sin: {{$film->sinopse}}</p>
            </div>
        </section>
    
        <section class="section">
            <div class="text">
                <h2>Trailer do filme {{ $film->title}}</h2>
            </div>
            <video width="400" controls>
                <source src="/video/{{ $film->trailer }}" type="video/mp4">
                Your browser does not support HTML video.
            </video>
        </section>
    
    <script>
        function addToWatchLater(filmId) {
            fetch(`/filmes/watch-later/add/${filmId}`, { 
                method: 'POST', 
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json', // Importante
                    'Accept': 'application/json'
                },
                body: JSON.stringify({}) // Mesmo vazio, alguns setups de Laravel requerem um body no POST
            })
            .then(res => res.json())
            .then(data => alert(data.message))
            .catch(error => console.error('Erro:', error)); 
            }
    </script>
    </body>
</x-guestLayout>
    