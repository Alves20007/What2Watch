<x-guestLayout>
    <form action="/films/store" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto mt-10 p-6 bg-gray-800 rounded shadow">
        <h1 class="text-2xl text-neutral-50 font-bold mb-6">Cadastro de Filme/Série/Vídeo</h1>

        @csrf
        <x-validation-errors />

        <!-- Data -->
        <div class="mb-4">
            <label for="data" class="block text-neutral-50 font-medium">Data da criação</label>
            <input type="date" name="data" id="data" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
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

        <!-- Título -->
        <div class="mb-4">
            <label for="title" class="block text-neutral-50 font-medium">Título</label>
            <input type="text" name="title" id="title" class="w-full p-2 border rounded bg-gray-700 text-white"
                onchange="document.getElementById('slug').value=slugify(this.value)" required>
        </div>

        <!-- Categoria -->
        <div class="mb-4">
            <label for="categoria" class="block text-neutral-50 font-medium">Categoria</label>
            <select name="categoria" id="categoria" class="w-full p-2 border rounded bg-gray-700 text-white">
                <option value="acao">Ação</option>
                <option value="comedia">Comédia</option>
                <option value="drama">Drama</option>
                <option value="FC">Ficção Científica</option>
                <option value="terror">Terror</option>
            </select>
        </div>

        <!-- Sinopse -->
        <div class="mb-4">
            <label for="sinopse" class="block text-neutral-50 font-medium">Sinopse</label>
            <textarea name="sinopse" id="sinopse" class="w-full p-2 border rounded bg-gray-700 text-white"></textarea>
        </div>

        <!-- Slug -->
        <div class="mb-4">
            <label for="slug" class="block text-neutral-50 font-medium">Slug</label>
            <input type="text" name="slug" id="slug" class="w-full p-2 border rounded bg-gray-700 text-white">
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
                <label for="Elenco" class="block text-neutral-50 font-medium">Elenco</label>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 bg-neutral-800 p-4 rounded">
                    @foreach ($actors as $actor)
                        <label class="flex items-center space-x-2 text-white">
                            <img src="{{ asset('images/' . $actor->image) }}" alt="{{ $actor->FullName }}" class="w-10 h-10 rounded-full object-cover">
                            <span>{{ $actor->FullName }}</span>
                            <input type="checkbox" name="Elenco[]" value="{{ $actor->id }}" class="ml-2 accent-red-600">
                        </label>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Série: Temporadas e Episódios -->
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

        <!-- Oscares (filme/série) -->
        <div id="oscaresGroup" class="hidden mb-4">
            <label for="oscares" class="block text-neutral-50 font-medium">Já recebeu Oscar?</label>
            <select name="oscares" id="oscares" class="w-full p-2 border rounded bg-gray-700 text-white">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>
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
            str = str.trim().toLowerCase();
            str = str.replace(/[^a-z0-9 -]/g, '')
                     .replace(/\s+/g, '-')
                     .replace(/-+/g, '-');
            return str;
        }

        document.addEventListener("DOMContentLoaded", function () {
            const tipoSelect = document.getElementById("tipo");
            const criadorGroup = document.getElementById("criadorGroup");
            const detalhesMidia = document.getElementById("detalhesMidia");
            const serieCampos = document.getElementById("serieCampos");
            const oscaresGroup = document.getElementById("oscaresGroup");

            function updateFields() {
                const tipo = tipoSelect.value;

                if (tipo === "filme" || tipo === "serie") {
                    criadorGroup.classList.add("hidden");
                    detalhesMidia.classList.remove("hidden");
                    oscaresGroup.classList.remove("hidden");
                } else {
                    criadorGroup.classList.remove("hidden");
                    detalhesMidia.classList.add("hidden");
                    oscaresGroup.classList.add("hidden");
                }

                if (tipo === "serie") {
                    serieCampos.classList.remove("hidden");
                } else {
                    serieCampos.classList.add("hidden");
                }
            }

            tipoSelect.addEventListener("change", updateFields);
            updateFields(); // Executa ao carregar
        });
    </script>
</x-guestLayout>
