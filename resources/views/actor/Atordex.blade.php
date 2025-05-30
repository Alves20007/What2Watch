<x-guestLayout>
    <div class="max-w-4xl mx-auto p-4">
        <div class="fixed right-4 top-28  w-56 z-50"> <!-- Container fixo à direita -->
            <div class="bg-zinc-800 bg-opacity-80 rounded-lg p-3 shadow-lg border border-zinc-600">
                <!-- Cabeçalho compacto -->
                <h2 class="text-white text-sm font-medium mb-2 flex items-center justify-between">
                    <span>FILTROS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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

                <!-- Seções compactas -->
                <div class="space-y-3">

                    <!--Genero -->
                    <div>
                        <h3 class="text-xs text-zinc-400 uppercase mb-1">Género</h3>
                        <div class="space-y-1">
                            <label class="flex items-center space-x-2 cursor-pointer group">
                                <input type="checkbox" name="sexo[]" value="Masculino" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Masculino</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer group"> 
                                <input type="checkbox" name="sexo[]" value="Femenino" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Femenino </span>
                            </label>
                        </div>
                    </div>
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
                                <input type="checkbox" name="profissao[]" value="artistas" 
                                       class="h-3.5 w-3.5 rounded-sm border-zinc-500 text-orange-500 focus:ring-orange-500 bg-zinc-700">
                                <span class="text-white text-sm group-hover:text-orange-300">Artistas</span>
                            </label>
                        </div>
                    </div>
                    <!-- Idade -->
                        
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
        <div class="ml-2 pr-64">
            <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 grid-atores">
                @foreach ($actor as $ator)
                    @php
                        // Nome: se null, usar primeiro e último do Fullname
                        $nome = $ator->Name;
                        if (empty($nome) && !empty($ator->Fullname)) {
                            $partes = preg_split('/\s+/', trim($ator->Fullname));
                            $primeiro = $partes[0] ?? '';
                            $ultimo = count($partes) > 1 ? $partes[count($partes) - 1] : '';
                            $nome = trim($primeiro . ' ' . $ultimo);
                        }

                        // Data: converter para DD/MM/YYYY se estiver no formato padrão
                        $data = $ator->birthday;
                        if (!empty($data) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $data)) {
                            try {
                                $data = \Carbon\Carbon::parse($data)->format('d/m/Y');
                            } catch (\Exception $e) {
                                // Deixa a data como está se der erro
                            }
                        }
                    @endphp

                   <a href="/atores/{{ $ator->Slug }}">
                        <div class="w-full">
                            <img 
                                class="w-full h-[500px] object-cover rounded" 
                                src="/imagens/atores/{{ $ator->image }}" 
                                alt="{{ $nome }}"
                            >
                        </div>
                        <b class="block text-neutral-50 mt-2 text-base">{{ $nome }}</b>
                        <p class="text-sm text-neutral-300 italic">{{ $data }}</p>
                    </a>
                @endforeach
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
            const searchButton = document.getElementById("searchButton");
            
            searchButton.addEventListener("click", function () {

                const profissao = Array.from(document.querySelectorAll("input[name='profissao[]']:checked"))
                                    .map(cb => cb.value);

                const sexo = Array.from(document.querySelectorAll("input[name='sexo[]']:checked"))
                                    .map(cb => cb.value);

                const searchTerm = document.getElementById("searchInputSidebar").value;


                fetch("{{ route('actor.filter') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                        
                    },
                    body: JSON.stringify({
                        profissao: profissao,
                        sexo: sexo,
                        search: searchTerm
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
