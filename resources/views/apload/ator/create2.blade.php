<x-guestLayout>
    <form action="/films/store" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto mt-10 p-6 bg-gray-800 rounded shadow">
        <h1 class="text-2xl text-neutral-50 font-bold mb-6">Cadastro das Celebridades</h1>

        @csrf
        <x-validation-errors />
        <!-- Nome do Filme -->
        <!-- Tipo -->
        <div class="mb-4">
            <label for="Nome" class="block text-neutral-50 font-medium">Nome da Celebridade</label>
            <input type="text" name="Nome" id="Nome" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" 
                onchange="document.getElementById('slug').value=slugify(document.getElementById('title').value)" required>
        </div>
        <!-- Slug -->
        <div class="mb-4">
            <label for="slug" class="block text-neutral-50 font-medium">Slug!!!!!!!!!!!!!!!!!!!!!!!!</label>
            <input type="text" name="slug" id="slug" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        {{-- <!-- Temporadas-->
        <div class="mb-4">
            <label for="Temporadas" class="block text-neutral-50 font-medium">Quantas temporadas possui (caso seja filme coloque 1)</label>
            <select name="Temporadas" id="Temporadas" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </select>
        </div>
                
        <!-- Episódios-->
        <div class="mb-4">
            <label for="Episodios" class="block text-neutral-50 font-medium">Quantos episódios possui (caso seja filme coloque 1)</label>
            <select name="Episodios" id="Episodios" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </select>
        </div> --}}

        <!-- Imagem -->
        <div class="mb-4">
            <label for="image" class="block text-neutral-50 font-medium">Imagem!!!!!!!!!!!!!!!!!!!!!!!!!!</label>
            <x-input type="file" name="image" id="image" class="w-full p-2 border rounded bg-gray-700 text-white"/>
        </div>

        <!-- Data -->
        <div class="mb-4">
            <label for="data" class="block text-neutral-50 font-medium">Data de nascimento</label>
            <input type="date" name="data" id="data" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Trailer -->
        <div class="mb-4">
            <label for="trailer" class="block text-neutral-50 font-medium">Video</label>
            <input type="file" name="trailer" id="trailer" class="w-full p-2 border rounded bg-gray-700 text-white"/>
        </div>

        <div class="mb-4">
            <label for="Falas" class="block text-neutral-50 font-medium">Frase do Ator</label>
            <textarea name="Falas" id="Falas" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <!-- Elenco -->

        {{-- <div class="mb-4">
            <label for="elenco" class="block text-neutral-50 font-medium">Elenco</label>
            <textarea name="elenco" id="elenco" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            <small class="text-gray-400">Se o ator estiver no banco de dados, sua foto será exibida automaticamente.</small>
        </div> --}}
        <!-- Sinopse -->
        <!-- Botão -->
        <div class="text-right">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Cadastrar Filme
            </button>
        </div>
    </form>
    <script>

            function slugify(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim leading/trailing white space
            str = str.toLowerCase(); // convert string to lowercase
            str = str.replace(/[^a-z0-9 -]/g, '') // remove any non-alphanumeric characters
                    .replace(/\s+/g, '-') // replace spaces with hyphens
                    .replace(/-+/g, '-'); // remove consecutive hyphens
            return str;
            }
    </script>
</x-guestLayout>
