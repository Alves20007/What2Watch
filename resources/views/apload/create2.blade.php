<x-guestLayout>
    <form action="/apload/store" method="POST">

        <div class="max-w-4xl mx-auto mt-10 p-6 bg-0000 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Cadastro do Ator</h1>


                @csrf
                <x-validation-errors/>  
                <!-- Nome do Filme -->
                <div class="mb-4">
                    <label class="block text-gray-700">Nome do Ator</label>
                    <input type="text" name="Name" class="w-full p-2 border rounded" required>
                </div>

                <!-- Slug -->
                <!-- Imagem -->
                <div class="mb-4">
                    <label class="block text-gray-700">Imagem</label>
                    <input type="file" name="image" class="w-full">
                </div>

                <!-- Data -->
                <div class="mb-4">
                    <label class="block text-gray-700">Data de nascimento</label>
                    <input type="date" name="birthday" class="w-full p-2 border rounded">
                </div>
            <!-- Botão -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Cadastrar ator
                    </button>
                </div>
        </div>
    </form>
</x-guestLayout>
