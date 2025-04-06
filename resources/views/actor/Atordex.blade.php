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
                    <!--profissao -->
                    <div>
                        <h3 class="text-xs text-zinc-400 uppercase mb-1">Tipo de profissao</h3>
                        <div class="space-y-1">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="profissao[]" value="ator" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Ator</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="profissao[]" value="CC" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Content Creator</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="profissao[]" value="desportista" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Desportista</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="profissao[]" value="escritor" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Escritor</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="profissao[]" value="escritor" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Cantor</span>
                            </label>
                        </div>
                    </div>
                    <!-- Idade -->
                    <div>
                        <h3 class="text-xs text-zinc-400 uppercase mb-1">Idade</h3>
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

        </div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($actor as $ator)
                <a href="/atores/{{ $ator->Slug }}">
                    <div class="border-2 p-4">
                        <img class="h-64 object-cover" src="/imagens/atores/{{ $ator->image }}">
                        <b class="text-neutral-50">{{ $ator->Name }}    </b>
                        <p class="font-italic text-neutral-50">{{ $ator->birthday }}</p>
                                            
                    </div>      
                </a>
            @endforeach
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const searchButton = document.getElementById("searchButton");
            
            searchButton.addEventListener("click", function () {
                // Coletar categorias e tipos selecionados
                const profissao = Array.from(document.querySelectorAll("input[name='profissao[]']:checked"))
                                    .map(cb => cb.value);

                fetch("{{ route('actor.filter') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        profissao: profissao,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.html) {
                        document.querySelector(".grid").innerHTML = data.html;
                    } else {
                        console.error("Resposta inesperada:", data);
                    }
                })
                .catch(error => console.error("Erro:", error));
            });
        });

        </script>
    </div>
</x-guestLayout>
