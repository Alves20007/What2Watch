<x-guestLayout>
    <form action="/actor/store" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto mt-10 p-6 bg-gray-800 rounded shadow">
        <h1 class="text-2xl text-neutral-50 font-bold mb-6">Cadastro das Celebridades</h1>

        @csrf
        <x-validation-errors />
        <!-- Name do Filme -->
        <div class="mb-4">
            <label for="Name" class="block text-neutral-50 font-medium">Nome da Celebridade (Tem de ser o nome completo)</label>
            <input type="text" name="Name" id="Name" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" 
                onchange="document.getElementById('Slug').value=slugify(document.getElementById('Name').value)" required>
        </div>
        <!-- Slug -->
        <div class="mb-4">
            <label for="Slug" class="block text-neutral-50 font-medium">Slug</label>
            <input type="text" name="Slug" id="Slug" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Tipo -->

         <div class="mb-S">
            <label for="sexo" class="block text-neutral-50 font-medium">De que Genero é a celebridade?</label>
            <select name="sexo" id="sexo" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
            </select>
        </div>
        
        <!-- Data -->
        <div class="mb-4">
            <label for="data" class="block text-neutral-50 font-medium">Data de nascimento</label>
            <input type="date" name="data" id="data" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="Falas" class="block text-neutral-50 font-medium">Uma frase do Ator</label>
            <textarea name="Falas" id="Falas" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div class="mb-4">
            <label for="bio" class="block text-neutral-50 font-medium">Hístoria</label>
            <textarea name="bio" id="bio" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <!-- Elenco -->

        {{-- <div class="mb-4">
            <label for="elenco" class="block text-neutral-50 font-medium">Elenco</label>
            <textarea name="elenco" id="elenco" class="w-full p-2 border rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            <small class="text-gray-400">Se o ator estiver no banco de dados, sua foto será exibida automaticamente.</small>
        </div> --}}
        <!-- Sinopse -->
        <!-- Botão -->

        <!--imagem -->
        <div class="mb-4">
            <label for="image" class="block text-neutral-50 font-medium">Imagem</label>
            <x-input type="file" name="image" id="image" class="w-full p-2 border rounded bg-gray-700 text-white"/>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Cadastrar ator
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
