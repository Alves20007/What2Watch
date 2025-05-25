<x-guestLayout>
    <div class="max-w-7xl mx-auto p-4 grid grid-cols-1 md:grid-cols-[1fr,auto] gap-6 items-start">
        
        <!-- Grid de filmes -->
       <div id="filmsGrid">
            @include('films.partials.grid')
        </div>
        <!-- Filtro fixo à direita que acompanha scroll -->
        <div class="sticky top-4 w-56">
            <div class="bg-zinc-800 bg-opacity-80 rounded-lg p-3 shadow-lg border border-zinc-600">
                <h2 class="text-white text-sm font-medium mb-2 flex items-center justify-between">
                    <span>FILTROS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-4 w-4 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                </h2>

                <div class="mb-3">
                    <label for="searchInputSidebar" class="sr-only">Pesquisar</label>
                    <input 
                        type="text" 
                        id="searchInputSidebar" 
                        placeholder="Pesquisar..." 
                        class="w-full px-3 py-1.5 text-sm bg-zinc-700 text-white border border-zinc-500 rounded-sm placeholder-zinc-400 focus:outline-none focus:ring-1 focus:ring-orange-500"
                    />
                </div>

                <div class="space-y-3">                    <!--estilo de media -->
                    <div>
                        <h3 class="text-xs text-zinc-400 uppercase mb-1">Tipo de Média</h3>
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
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="drama" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Drama</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="fantasia" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Fantasia</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="romance" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Romance</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="musical" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Musical</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="animacao" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Animação</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="documentario" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Documentário</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="biografia" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Biografia</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="guerra" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Guerra</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="categorias[]" value="policial" 
                                    class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Policial</span>
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
                </div>

                <button id="searchButton" 
                        class="mt-3 w-full bg-orange-600 hover:bg-orange-700 text-white py-1.5 px-3 rounded-sm 
                               text-xs font-medium uppercase tracking-wider transition duration-150">
                    Aplicar
                </button>
            </div>
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

            document.addEventListener("DOMContentLoaded", function () {
                const searchButton = document.getElementById("searchButton");

                searchButton.addEventListener("click", handleSearch);
                document.getElementById("searchInputSidebar").addEventListener("keypress", function (e) {
                    if (e.key === "Enter") {
                        e.preventDefault();
                        handleSearch();
                    }
                });

                function handleSearch() {
                    const categorias = Array.from(document.querySelectorAll("input[name='categorias[]']:checked"))
                                        .map(cb => cb.value);
                    
                    const tipos = Array.from(document.querySelectorAll("input[name='tipos[]']:checked"))
                                    .map(cb => cb.value);

                    const CE = Array.from(document.querySelectorAll("input[name='CE[]']:checked"))
                                    .map(cb => cb.value);

                    const searchTerm = document.getElementById("searchInputSidebar").value;

                    fetch("/filmes/filter", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify({
                            categorias: categorias,
                            tipos: tipos,
                            CE: CE,
                            search: searchTerm
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.html) {
                            document.getElementById("filmsGrid").innerHTML = data.html;
                        } else {
                            console.error("Resposta inesperada:", data);
                        }
                    })
                    .catch(error => console.error("Erro:", error));
                }
            });
        </script>
    </div>
</x-guestLayout>
