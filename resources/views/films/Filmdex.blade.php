<x-guestLayout>
    <div class="max-w-4xl mx-auto p-4">

        <!-- Botões de navegação -->
        <div class="my-8 flex gap-4">
            <x-button class="bg-orange-500 hover:bg-orange-600 text-white">
                <a href="{{ url('filmes') }}">Filmes</a>
            </x-button>
            <x-button class="bg-orange-700 hover:bg-orange-500 text-slate-950 border border-zinc-300">
                <a href="{{ url('series') }}">Séries</a>
            </x-button>
            <x-button class="bg-yellow-500 hover:bg-orange-500 text-slate-950 border border-zinc-300">
                <a href="{{ url('video/utilizador') }}">Vídeos</a>
            </x-button>
        </div>
        <!-- Grid de filmes -->
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($films as $film)
                <a href="/filmes/{{ $film->slug }}" class="block hover:shadow-lg transition-shadow duration-300">
                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden p-4">
                        <!-- Imagem do filme -->
                        <img 
                            class="h-64 w-full object-cover rounded-t-lg" 
                            src="/images/{{ $film->image }}" 
                            alt="{{ $film->title }} - Poster" 
                            loading="lazy"
                        >
                        <!-- Informações do filme -->
                        <div class="mt-2">
                            <h3 class="font-bold text-neutral-200 text-lg">{{ $film->title }}</h3>
                            <p class="text-sm text-neutral-200">{{ $film->Data }}</p>
<<<<<<< HEAD
                            <button 
                                onclick="event.stopPropagation(); addToWatchLater({{ $film->id }})" 
                                class=" text-white px-4 rounded-full shadow hover:bg-blue-600 transition">
                                📁
=======
                            
                            <button onclick="addToWatchLater({{ $film->id }})" class="bg-blue-500 text-white px-4  rounded-full shadow hover:bg-blue-600 transition">
                                📁 Ver Depois
>>>>>>> 8db8b9d7de183be8a5b0123c38fb9f823d5028e2
                            </button>
                            
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <script>
            function addToWatchLater(filmId) {
                fetch(/filmes/watch-later/add/${filmId}, {
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
    </div>
</x-guestLayout>