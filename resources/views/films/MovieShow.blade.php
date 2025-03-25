<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>
    <body>
        @if (Auth::check())
            <button onclick="addToWatchLater({{ $film->id }})" class="bg-blue-500 text-white px-4  rounded-full shadow hover:bg-blue-600 transition ml-[1310px]">
                📁 Ver Depois
            </button>
            <a href="{{ route('films.review.form', $film) }}" class="bg-green-500 text-white px-4  rounded-full shadow hover:bg-green-600 transition ml-[1310px]">
                📝 Review
            </a>
        @else
            <p>Faz login para guardar na lista "Ver Depois"</p>
        @endif
    
        <section class="intro">
            <h1 class="text-yellow-600">{{ $film->title }}</h1>
            <p>{{ $film->Falas }}</p>
        </section>
    
        <section class="section flex flex-col md:flex-row items-center gap-6 p-4">
            <div class="h-80 w-60 md:h-96 md:w-72 overflow-hidden rounded-lg shadow-lg">
                <img class="h-full w-full object-cover" src="/images/{{ $film->image }}" alt="{{ $film->title }}">
            </div>
            <div class="text max-w-md">
                <h2 class="text-xl font-semibold mb-2">Sínopse do {{ $film->tipo }}</h2>
                <p><b>Temporadas: {{ $film->Temporadas }}</b></p>
                <p><b>Episódios: {{ $film->Episodios }}</b></p>
                <p><b>Sinopse:</b> {{ $film->sinopse }}</p>
                @if($film->reviews->count() > 0)
                <div class="mt-4">
                    <p class="text-lg font-semibold">Avaliação Média: 
                        <span class="text-yellow-500">{{ number_format($film->reviews->avg('rating'), 1) }}/10</span>
                    </p>
                </div>
                @endif
            </div>
        </section>
    
        <section class="section">
            <h2>Trailer do filme {{ $film->title }}</h2>
            <video width="400" controls>
                <source src="/video/{{ $film->trailer }}" type="video/mp4">
                Seu navegador não suporta vídeo HTML.
            </video>
        </section>
        <section class="intro">
            <h2 class="text-xl font-bold mb-4 text-yellow-600">Avaliações</h2>
            @if ($film->reviews->count() > 0)
                <p class="text-lg">
                    Média: <span class="font-bold">{{ number_format($film->reviews->avg('rating'), 1) }}/10</span>
                    ({{ $film->reviews->count() }} reviews)
                </p>
                <div class="mt-4 space-y-4">
                    @foreach ($film->reviews as $review)
                        <div class="p-3 bg-neutral-800 rounded shadow">
                            <p class="font-semibold">
                                <!-- Nome do usuário + nota -->
                                {{ $review->user->name }}<br>
                                Nota: {{ $review->rating }}/10  
                            </p>
                            <!-- Comentário -->
                            <p class="text-neutral-100">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Nenhuma review ainda. Seja o primeiro a avaliar!</p>
            @endif
        </section>
    
        <script>
            function addToWatchLater(filmId) {
                fetch(`/filmes/watch-later/add/${filmId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({})
                })
                .then(res => res.json())
                .then(data => alert(data.message))
                .catch(error => console.error('Erro:', error));
            }

            function reviewFilm(filmId) {
                fetch(`/filmes/review/${filmId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({})
                })
                .then(res => res.json())
                .then(data => alert(data.message))
                .catch(error => console.error('Erro:', error));
            }
        </script>
    </body>
</x-guestLayout>
