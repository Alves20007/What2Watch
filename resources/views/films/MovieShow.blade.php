<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>

    <body class="bg-neutral-700 text-white">
        @auth
            <div class="flex justify-end gap-4 p-4">
                <button onclick="addToWatchLater({{ $film->id }})"
                    class="bg-blue-500 text-white px-4 py-2 rounded-full shadow hover:bg-blue-600 transition">
                    Ver Depois
                </button>
                <a href="{{ route('films.review.form', $film) }}"
                    class="bg-green-500 text-white px-4 py-2 rounded-full shadow hover:bg-green-600 transition">
                    Review
                </a>
            </div>
        @else
            <p class="text-center text-sm text-gray-300">Faz login para guardar na lista "Ver Depois" ou escrever uma review</p>
        @endauth

        <section class="relative bg-neutral-700 text-white mb-6">
            <div class="absolute inset-0">
                <img src="/bannerFilmw/{{ $film->banner }}" alt="{{ $film->title }}" class="w-full h-full object-cover opacity-30">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/20"></div>
            </div>
        
            <div class="relative z-10 px-6 py-10 max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-6">
                <div class="w-48 h-72 overflow-hidden rounded shadow-lg">
                    <img src="/images/{{ $film->image }}" alt="{{ $film->title }}" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2 text-yellow-400">{{ $film->title }}</h1>
                    <p class="mb-4 text-sm italic">{{ $film->Falas }}</p>
                    <p class="mb-2"><b>Data:</b> {{ $film->Data }}</p>
                    <p class="mb-2"><b>Classificação:</b> {{ $film->CE }}</p>
                    <p class="mb-2"><b>Sínopse:</b>{{ $film->sinopse}}</p>
        
                    @if($film->tipo === 'serie')
                        <p class="mb-2"><b>Temporadas:</b> {{ $film->Temporadas }}</p>
                        <p class="mb-2"><b>Episódios:</b> {{ $film->Episodios }}</p>
                    @endif
        
                    <a href="/video/{{ $film->trailer }}" target="_blank" class="inline-block mt-4 px-5 py-2 bg-red-600 text-white rounded-full shadow hover:bg-red-700 transition">
                        ▶️ Ver Trailer
                    </a>
                </div>
            </div>
        </section>
        <!-- Elenco principal -->
        <section class="p-6">
            <h2 class="text-3xl font-extrabold text-yellow-400 mb-6 border-b border-yellow-500 pb-2">
                Elenco Principal
            </h2>
        
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($film->actors as $actor)
                    <a href="/atores/{{ $actor->Slug }}" class="bg-neutral-800 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 group">
                        <div class="h-64 w-full overflow-hidden">
                            <img src="/imagens/atores/{{ $actor->image }}" alt="{{ $actor->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-white mb-1 truncate">{{ $actor->Name }}</h3>
                            <p class="text-sm text-yellow-300 italic">Personagem: {{ $actor->pivot->personagem ?? 'Desconhecido' }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

        <!-- Críticas -->
        <section class="p-6">
            <h2 class="text-xl font-bold text-yellow-500 mb-4">Críticas</h2>
        
            @if ($film->reviews->count() > 0)
                <p>Média: <span class="font-bold">{{ number_format($film->reviews->avg('rating'), 1) }}/5</span>
                    ({{ $film->reviews->count() }} reviews)</p>
                <div class="mt-4 space-y-4">
                    @foreach ($film->reviews as $review)
                        <div class="p-3 bg-neutral-800 rounded shadow">
                            <p class="font-semibold">{{ $review->user->name }} — Nota: {{ $review->rating }}/5</p>
                            <p class="text-neutral-100">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Ainda não há reviews. Sê o primeiro a avaliar!</p>
            @endif
        
            @guest
                <p class="mt-4 text-sm text-gray-300 italic">⚠️ Inicia sessão para escrever uma crítica.</p>
            @endguest
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
        </script>
    </body>
</x-guestLayout>
