<x-guestLayout>
    <div class="max-w-4xl mx-auto p-4">
        <!-- Título da página -->
        <h1 class="text-3xl font-bold text-yellow-600 mb-6">Top 100 Filmes</h1>
        <p class="text-neutral-200 mb-8">Os filmes melhor avaliados pela comunidade</p>

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
            <x-button class="bg-purple-500 hover:bg-purple-600 text-white">
                <a href="{{ url('top-100') }}">Top 100</a>
            </x-button>
        </div>

        <!-- Grid de filmes -->
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($films as $film)
                <a href="/filmes/{{ $film->slug }}" class="block hover:shadow-lg transition-shadow duration-300">
                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden p-4 ">
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
                            
                            <!-- Avaliação -->
                            <div class="flex items-center mt-2">
                                <div class="flex mr-2">
                                    @php $roundedRating = round($film->average_rating) @endphp
                                    @for($i = 1; $i <= 5;$i++)
                                        @if($i <= $roundedRating)
                                            <span class="text-yellow-500">★</span>
                                        @else
                                            <span class="text-gray-400">★</span>
                                        @endif
                                    @endfor
                                </div>
                                <span class="text-neutral-200 text-sm">
                                    {{ number_format($film->average_rating, 1) }} ({{ $film->reviews_count }})
                                </span>
                            </div>
                            
                    
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>