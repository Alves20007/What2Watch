<x-guestLayout>
    <div class="max-w-4xl mx-auto p-4">
        <div class="absolute right-4 top-45 w-56"> <!-- Container fixo à direita -->
            <div class="bg-zinc-800 bg-opacity-80 rounded-lg p-3 shadow-lg border border-zinc-600">
                <!-- Cabeçalho compacto -->
                <h2 class="text-white text-sm font-medium mb-2 flex items-center justify-between">
                    <span>FILTROS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                </h2>
        
                <!-- Seções compactas -->
                <div class="space-y-3">
                    <!--estilo de media -->
                    <div>
                        <h3 class="text-xs text-zinc-400 uppercase mb-1">Tipo de édia</h3>
                        <div class="space-y-1">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="tipos[]" value="filme" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Filme</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="tipos[]" value="serie" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Série</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="tipos[]" value="video" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">watchers Time</span>
                            </label>
                        </div>
                    </div>

                    <!-- Categorias -->
                    <div>
                        <h3 class="text-xs text-zinc-400 uppercase mb-1">Categorias</h3>
                        <div class="space-y-1">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="terror" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Terror</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="acao" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Ação</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="comedia" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Comedia</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="thriller" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Thriller</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="Aventura" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Aventura</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="FC" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Ficção cientifíca</span>
                            </label>
                        </div>
                    </div>
        
                    <div>
                        <h3 class="text-xs text-zinc-400 uppercase mb-1">Classificação Eteraria</h3>
                        <div class="space-y-1">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="CE[]" value="M/6" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Maiores de 6</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="CE[]" value="M/12" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Maiores de 12</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="CE[]" value="M/16" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Maiores de 16</span>
                            </label>
                        </div>
                    </div>
                </div>
        
                <!-- Botão compacto -->
                <button id="searchButton" 
                        class="mt-3 w-full bg-orange-600 hover:bg-orange-700 text-white py-1.5 px-3 rounded-sm 
                               text-xs font-medium uppercase tracking-wider transition duration-150">
                    Aplicar
                </button>
            </div>
        </div>

    
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
                            <button 
                                onclick="event.stopPropagation(); addToWatchLater({{ $film->id }})" 
                                class=" text-white px-4 rounded-full shadow hover:bg-blue-600 transition">
                                📁
                            </button>
                            <div class="flex items-center mt-2">
                                <div class="flex mr-2">
                                    @php $roundedRating = round($film->average_rating) @endphp
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $roundedRating)
                                            <span class="text-yellow-500">★</span>
                                        @else
                                            <span class="text-gray-400">★</span>
                                        @endif
                                    @endfor
                                </div>
                                <span class="text-neutral-300 text-sm">
                                    {{ number_format($film->average_rating, 1) }} ({{ $film->reviews_count }})
                                </span>
                            </div>\
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" id="filmesGrid">
            @include('partials.filmes_grid', ['films' => $films])
        </div>

        
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

            document.addEventListener("DOMContentLoaded", function() {
        const searchButton = document.getElementById("searchButton");
        
        searchButton.addEventListener("click", function() {
            const categorias = Array.from(document.querySelectorAll("input[name='categorias[]']:checked"))
                                .map(cb => cb.value);
            
            const tipos = Array.from(document.querySelectorAll("input[name='tipos[]']:checked"))
                            .map(cb => cb.value);

            const CE = Array.from(document.querySelectorAll("input[name='CE[]']:checked"))
                            .map(cb => cb.value);

            fetch("{{ route('filmes.filter.escolhido') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    categorias: categorias,
                    tipos: tipos,
                    CE: CE
                }),
            })
            .then(response => {
                if (!response.ok) throw new Error("Erro na resposta");
                return response.json();
            })
            .then(data => {
                if (data.html) {
                    document.getElementById("filmesGrid").innerHTML = data.html;
                }
            })
            .catch(error => {
                console.error("Erro:", error);
                alert("Ocorreu um erro ao filtrar. Verifique o console.");
            });
        });
    });

        </script>
    </div>
</x-guestLayout>