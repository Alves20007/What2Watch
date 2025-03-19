<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>
    <body>
        @if (Auth::check())
        <button onclick="addToWatchLater({{ $film->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-full shadow hover:bg-blue-600 transition ml-[1313Px]">
            📁
            ver depois
        </button>
        @else
            <p>Faz login para guardar na lista "Ver Depois"</p>
        @endif
    
        <!-- Introdução -->
        <section class="intro">
            <h1 class="text-yellow-600">{{ $film->title }}</h1>
            <p>{{ $film->Falas }}</p>
        </section>
    
        <section class="section flex flex-col md:flex-row items-center gap-6 p-4">
    <!-- Imagem com tamanho fixo e responsivo -->
    <div class="h-80 w-60 md:h-96 md:w-72 overflow-hidden rounded-lg shadow-lg">
        <img class="h-full w-full object-cover" src="/images/{{ $film->image }}" alt="{{ $film->title }}">
    </div>
    <!-- Texto -->
    <div class="text max-w-md">
        <h2 class="text-xl font-semibold mb-2">Sínopse do {{ $film->tipo }}</h2>
        <p><b>Temporadas: {{ $film->Temporadas }}</b></p>
        <p><b>Episódios : {{ $film->Episodios }}</b></p>
        <p><b>Sinopse: </b>{{ $film->sinopse }}</p>
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
    