<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>
    <body>
    
        <div class="absolute top-40 right-4">
            <button onclick="addToWatchLater({{ $film->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-full shadow hover:bg-blue-600 transition">
                + Ver Depois
            </button>
            <button onclick="removeFromWatchLater({{ $film->id }})" class="bg-red-500 text-white px-4 py-2 rounded-full shadow hover:bg-red-600 transition">
                Remover
            </button>
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
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                })
                .then(res => res.json())
                .then(data => alert(data.message));
            }
    
            function removeFromWatchLater(filmId) {
                fetch(`/filmes/watch-later/remove/${filmId}`, { 
                    method: 'DELETE', 
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                })
                .then(res => res.json())
                .then(data => alert(data.message));
            }
        </script>
    </body>
    </x-guestLayout>
    