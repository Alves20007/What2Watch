<x-guestLayout>
    <form action="/actor/store" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto bg-zinc-800 p-6 rounded-xl shadow-lg">
         <h1 class="text-2xl text-neutral-50 font-bold mb-6">Registar Famoso/a</h1>
        @csrf

        <!-- Nome completo -->
        <div class="mb-4">
            <label for="FullName" class="block text-neutral-50 font-medium">Nome Completo</label>
            <input 
                type="text" 
                name="FullName" 
                id="FullName" 
                class="w-full p-2 border rounded bg-gray-700 text-white" 
                required 
                onchange="handleFullNameChange(this.value)">
        </div>

        <!-- Campo oculto: Name -->
        <input type="hidden" name="Name" id="Name">

        <!-- Aniversário -->
        <div class="mb-4">
            <label for="birthday" class="block text-neutral-50 font-medium">Data de Nascimento</label>
            <input type="date" name="birthday" id="birthday" class="w-full p-2 border rounded bg-gray-700 text-white" required>
        </div>

        <!-- Campo oculto: Slug -->
        <input type="hidden" name="slug" id="slug">

        <!-- Frase -->
        <div class="mb-4">
            <label for="Frase" class="block text-neutral-50 font-medium">Frase Marcante</label>
            <input type="text" name="Frase" id="Frase" class="w-full p-2 border rounded bg-gray-700 text-white" required>
        </div>

        <!-- Sexo -->
        <div class="mb-4">
            <label for="sexo" class="block text-neutral-50 font-medium">Sexo</label>
            <select name="sexo" id="sexo" class="w-full p-2 border rounded bg-gray-700 text-white" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>

        <!-- Falecimento -->
        <div class="mb-4">
            <label for="Falecimento" class="block text-neutral-50 font-medium">Qual é o Estado Vital do Famoso</label>
            <select name="Falecimento" id="Falecimento" class="w-full p-2 border rounded bg-gray-700 text-white">
                <option value="Vivo">Vivo</option>
                <option value="Morto">Morto</option>
            </select>
        </div>

        <!-- País -->
        <div class="mb-4">
            <label for="Country" class="block text-neutral-50 font-medium">País</label>
            <input type="text" name="Country" id="Country" class="w-full p-2 border rounded bg-gray-700 text-white" required>
        </div>

        <!-- Profissão -->
        <div class="mb-4">
            <label for="profissao" class="block text-neutral-50 font-medium">Profissão</label>
            <select name="profissao" id="profissao" class="w-full p-2 border rounded bg-gray-700 text-white">
                <option value="ator">Ator</option>
                <option value="CC">Atriz</option>
                <option value="desportista">Diretor</option>
                <option value="escritor">Produtor</option>
                <option value="artistas">Roteirista</option>
            </select>
        </div>

        <!-- Biografia -->
        <div class="mb-4">
            <label for="bio" class="block text-neutral-50 font-medium">Biografia</label>
            <textarea name="bio" id="bio" rows="4" class="w-full p-2 border rounded bg-gray-700 text-white"></textarea>
        </div>

        <!-- Imagem -->
        <div class="mb-4">
            <label for="image" class="block text-neutral-50 font-medium">Foto do Ator</label>
            <input type="file" name="image" id="image" accept="image/*" class="w-full p-2 border rounded bg-gray-700 text-white" required>
        </div>

        <!-- Submeter -->
        <div class="mt-6">
            <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded shadow">
                Criar Ator
            </button>
        </div>
    </form>

    <script>
        function slugify(str) {
            return str.trim().toLowerCase()
                .replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
        }

        function handleFullNameChange(fullName) {
            const partes = fullName.trim().split(/\s+/);
            const name = (partes[0] ?? '') + ' ' + (partes[1] ?? '');
            document.getElementById('Name').value = name.trim();
            document.getElementById('slug').value = slugify(fullName);
        }
    </script>
</x-guestLayout>
