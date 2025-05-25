<x-guestLayout>
    <form action="/films/store" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto mt-10 p-6 bg-gray-800 rounded shadow">
        <h1 class="text-2xl text-neutral-50 font-bold mb-6">Registar Filme/Série/Vídeo</h1>

        @csrf
        <x-validation-errors />


        <!-- Título -->
        <div class="mb-4">
            <label for="title" class="block text-neutral-50 font-medium">Título</label>
            <input type="text" name="title" id="title" class="w-full p-2 border rounded bg-gray-700 text-white"
                onchange="document.getElementById('slug').value=slugify(this.value)" required>
        </div>

                <!-- Tipo -->
        <div class="mb-4">
            <label for="tipo" class="block text-neutral-50 font-medium">Tipo de Mídia</label>
            <select name="tipo" id="tipo" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="filme">Filme</option>
                <option value="serie">Série</option>
                <option value="video">Vídeo</option>
            </select>
        </div>

        <!-- Classificaçao eteraria -->
        <div class="mb-4">
            <label for="CE" class="block text-neutral-50 font-medium">Ce de Mídia</label>
            <select name="CE" id="CE" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="M/6">6</option>
                <option value="M/12">12</option>
                <option value="M/16">16</option>
            </select>
        </div>


        <!-- Data -->
        <div class="mb-4">
            <label for="data" class="block text-neutral-50 font-medium">Data da criação</label>
            <input type="date" name="data" id="data" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Categoria -->
        <div class="mb-4 relative w-full max-w-xs">
            <label class="block text-neutral-50 font-medium mb-1">Categoria</label>
            <button type="button" id="dropdownButton" class="w-full p-2 border rounded bg-gray-700 text-white flex justify-between items-center focus:outline-none">
                Selecionar categorias
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>

            <div id="dropdownMenu" class="hidden absolute mt-1 w-full bg-gray-700 rounded shadow max-h-48 overflow-auto z-10">
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="acao" class="mr-2 accent-red-600">
                    Ação
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="comedia" class="mr-2 accent-red-600">
                    Comédia
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="drama" class="mr-2 accent-red-600">
                    Drama
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="FC" class="mr-2 accent-red-600">
                    Ficção Científica
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="terror" class="mr-2 accent-red-600">
                    Terror
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="aventura" class="mr-2 accent-red-600">
                    Aventura
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="thriller" class="mr-2 accent-red-600">
                    Thriller
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="fantasia" class="mr-2 accent-red-600">
                    Fantasia
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="romance" class="mr-2 accent-red-600">
                    Romance
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="musical" class="mr-2 accent-red-600">
                    Musical
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="animacao" class="mr-2 accent-red-600">
                    Animação
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="documentario" class="mr-2 accent-red-600">
                    Documentário
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="biografia" class="mr-2 accent-red-600">
                    Biografia
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="guerra" class="mr-2 accent-red-600">
                    Guerra
                </label>
                <label class="flex items-center px-4 py-2 hover:bg-gray-600 cursor-pointer">
                    <input type="checkbox" name="categoria[]" value="policial" class="mr-2 accent-red-600">
                    Policial
                </label>
            </div>
        </div>

        <!-- Sinopse -->
        <div class="mb-4">
            <label for="sinopse" class="block text-neutral-50 font-medium">Sinopse</label>
            <textarea name="sinopse" id="sinopse" class="w-full p-2 border rounded bg-gray-700 text-white"></textarea>
        </div>

        <div class="mb-4">
            <label for="Falas" class="block text-neutral-50 font-medium">Fala famosa do Filme/serie</label>
            <textarea name="Falas" id="Falas" class="w-full p-2 border rounded bg-gray-700 text-white"></textarea>
        </div>

        <div id="serieCampos" class="hidden">
        <div class="mb-4">
            <label for="Temporadas" class="block text-neutral-50 font-medium">Temporadas</label>
            <input type="number" name="Temporadas" id="Temporadas" class="w-full p-2 border rounded bg-gray-700 text-white">
        </div>

        <div class="mb-4">
            <label for="Episodios" class="block text-neutral-50 font-medium">Episódios</label>
            <input type="number" name="Episodios" id="Episodios" class="w-full p-2 border rounded bg-gray-700 text-white">
        </div>
    </div>


        <!-- Slug -->
        <div class="mb-4">
            <label for="slug"  class="block text-neutral-50 font-medium"></label>
            <input type="hidden" name="slug" id="slug" class="w-full p-2 border rounded bg-gray-700 text-white">
        </div>

        <!-- Criador (apenas se tipo = vídeo) -->
        <div id="criadorGroup" class="mb-4">
            <label for="criador" class="block text-neutral-50 font-medium">Criador</label>
            <input type="text" name="criador" id="criador" class="w-full p-2 border rounded bg-gray-700 text-white">
        </div>

        <div id="detalhesMidia" class="hidden">
            <div class="mb-4">
                <label for="Diretor" class="block text-neutral-50 font-medium">Diretor</label>
                <input type="text" name="Diretor" id="Diretor" class="w-full p-2 border rounded bg-gray-700 text-white">
            </div>

            <div class="mb-4">
                <label for="Editora" class="block text-neutral-50 font-medium">Editora</label>
                <input type="text" name="Editora" id="Editora" class="w-full p-2 border rounded bg-gray-700 text-white">
            </div>

           <div class="mb-4">
                <label for="actorSearch" class="block text-neutral-50 font-medium">Buscar Atores</label>
                <input type="text" id="actorSearch" placeholder="Digite o nome do ator..." class="w-full p-2 border rounded bg-gray-700 text-white">
                <div id="actorSuggestions" class="bg-gray-700 mt-1 rounded shadow text-white z-50 relative"></div>
                <div class="mb-4">
                <label class="block text-neutral-50 font-medium">Elenco Selecionado</label>
                <div id="selectedActors" class="flex flex-col gap-2 mt-2"></div>
                </div>
            </div>
        </div>

        <!-- Série: Temporadas e Episódios -->
        <!-- Oscares (filme/série) -->
        <div id="oscaresGroup" class="hidden mb-4">
            <label for="oscares" class="block text-neutral-50 font-medium">Já recebeu Oscar?</label>
            <select name="oscares" id="oscares" class="w-full p-2 border rounded bg-gray-700 text-white">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>

            <div id="quantosOscaresGroup" class="hidden mt-4">
                <label for="Oscares" class="block text-neutral-50 font-medium">Quantos Oscars?</label>
                <input type="number" name="Oscares" id="Oscares" min="1" class="w-full p-2 border rounded bg-gray-700 text-white">
            </div>
        </div>

        <!-- Imagem -->
        <div class="mb-4">
            <label for="image" class="block text-neutral-50 font-medium">Imagem</label>
            <x-input type="file" name="image" id="image" class="w-full p-2 border rounded bg-gray-700 text-white" />
        </div>

        <!-- Trailer -->
        <div class="mb-4">
            <label for="trailer" class="block text-neutral-50 font-medium">Vídeo/Trailer</label>
            <input type="file" name="trailer" id="trailer" class="w-full p-2 border rounded bg-gray-700 text-white" />
        </div>

        <!-- Botão -->
        <div class="text-right">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Cadastrar Mídia
            </button>
        </div>
    </form>

    <!-- JavaScript para lógica dinâmica -->
    <script>
    function slugify(str) {
        return str.trim().toLowerCase()
            .replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    document.addEventListener("DOMContentLoaded", function () {
        const tipoSelect = document.getElementById("tipo");
        const criadorGroup = document.getElementById("criadorGroup");
        const detalhesMidia = document.getElementById("detalhesMidia");
        const serieCampos = document.getElementById("serieCampos");
        const oscaresGroup = document.getElementById("oscaresGroup");
        const oscaresSelect = document.getElementById("oscares");
        const quantosOscaresGroup = document.getElementById("quantosOscaresGroup");
        const input = document.getElementById("actorSearch");
        const suggestionsBox = document.getElementById("actorSuggestions");
        const selectedActorsContainer = document.getElementById("selectedActors");

        // Dropdown Categorias
        const btn = document.getElementById('dropdownButton');
        const menu = document.getElementById('dropdownMenu');
        const checkboxes = menu.querySelectorAll('input[type="checkbox"]');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Fecha o dropdown se clicar fora
        document.addEventListener('click', (e) => {
            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });

        // Atualiza texto do botão com categorias selecionadas
        function updateButtonText() {
            const selected = [...checkboxes].filter(c => c.checked).map(c => c.parentNode.textContent.trim());
            btn.textContent = selected.length > 0 ? selected.join(', ') : 'Selecionar categorias';

            // Mantém o ícone da seta no botão
            const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svg.setAttribute('class', 'w-4 h-4 ml-2 inline-block');
            svg.setAttribute('fill', 'none');
            svg.setAttribute('stroke', 'currentColor');
            svg.setAttribute('viewBox', '0 0 24 24');
            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>';
            btn.appendChild(svg);
        }

        checkboxes.forEach(chk => {
            chk.addEventListener('change', updateButtonText);
        });

        updateButtonText();

        // Resto do código original abaixo...

        function updateOscaresField() {
            quantosOscaresGroup.classList.toggle("hidden", oscaresSelect.value !== "sim");
        }

        oscaresSelect.addEventListener("change", updateOscaresField);
        updateOscaresField();

        function updateFields() {
            const tipo = tipoSelect.value;
            criadorGroup.classList.toggle("hidden", tipo !== "video");
            detalhesMidia.classList.toggle("hidden", tipo === "video");
            oscaresGroup.classList.toggle("hidden", tipo === "video");
            serieCampos.classList.toggle("hidden", tipo !== "serie");
        }

        tipoSelect.addEventListener("change", updateFields);
        updateFields();

        input.addEventListener("input", function () {
            const query = this.value.trim();
            suggestionsBox.innerHTML = "";

            if (query.length < 1) return;

            fetch(`/actors/search?q=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(actors => {
                    actors.forEach(actor => {
                        const div = document.createElement("div");
                        div.className = "flex items-center gap-2 p-2 hover:bg-gray-600 cursor-pointer";
                        div.innerHTML = `
                            <img src="/imagens/atores/${actor.image}" class="w-8 h-8 rounded-full object-cover">
                            <span>${actor.FullName}</span>
                        `;
                        div.addEventListener("click", () => {
                            let existingCheckbox = document.querySelector(`input[type="checkbox"][value="${actor.id}"]`);
                            if (!existingCheckbox) {
                                const container = document.createElement('label');
                                container.className = "flex items-center space-x-2 text-white";
                                container.innerHTML = `
                                    <img src="/imagens/atores/${actor.image}" class="w-10 h-10 rounded-full object-cover">
                                    <span>${actor.FullName}</span>
                                    <input type="checkbox" name="Elenco[]" value="${actor.id}" checked class="ml-2 accent-red-600">
                                `;
                                selectedActorsContainer.appendChild(container);
                            } else {
                                existingCheckbox.checked = true;
                            }
                            input.value = "";
                            suggestionsBox.innerHTML = "";
                        });
                        suggestionsBox.appendChild(div);
                    });
                });
        });
    });
    </script>
</x-guestLayout>
