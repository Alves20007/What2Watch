<x-guestLayout>
    <form action="/apload/store" method="POST">

        <div class="max-w-4xl mx-auto mt-10 p-6 bg-0000 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Cadastro de Filme</h1>


                @csrf
                <x-validation-errors/>
                <!-- Nome do Filme -->
                <div class="mb-4">
                    <label class="block text-gray-700">Nome do Filme</label>
                    <input type="text" name="name" class="w-full p-2 border rounded" required>
                </div>

                <!-- Slug -->
                <div class="mb-4">
                    <label class="block text-gray-700">Slug</label>
                    <input type="text" name="slug" class="w-full p-2 border rounded">
                </div>

                <!-- Imagem -->
                <div class="mb-4">
                    <label class="block text-gray-700">Imagem</label>
                    <input type="file" name="imagem" class="w-full">
                </div>

                <!-- Data -->
                <div class="mb-4">
                    <label class="block text-gray-700">Data</label>
                    <input type="date" name="data" class="w-full p-2 border rounded">
                </div>

                <!-- Categoria -->
                <div class="mb-4">
                    <label class="block text-gray-700">Categoria</label>
                    <input type="text" name="categoria" class="w-full p-2 border rounded">
                </div>

                <!-- Trailer -->
                <div class="mb-4">
                    <label class="block text-gray-700">Trailer (URL)</label>
                    <input type="url" name="trailer" class="w-full p-2 border rounded">
                </div>

                <!-- Elenco -->
                <div class="mb-4">
                    <label class="block text-gray-700">Elenco (Nota: isto tem de ser do genero de tem na db e aparece o ator caso o ator estaja na db ou seja jonny deep aparece a foto dele e é ele que aparece em baixo em ver de ser caixa de texto)</label>
                    <textarea name="elenco" class="w-full p-2 border rounded"></textarea>
                </div>

                <!-- Sinopse -->
                <div class="mb-4">
                    <label class="block text-gray-700">Sinopse</label>
                    <textarea name="sinopse" class="w-full p-2 border rounded"></textarea>
                </div>

                <!-- Botão -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Cadastrar Filme
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-guestLayout>
