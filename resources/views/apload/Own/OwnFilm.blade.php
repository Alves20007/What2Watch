<x-guestLayout>
    <form action="/apload/Own/store" method="POST">
        <div class="max-w-4xl mx-auto mt-10 p-6 bg-0000 rounded shadow">
            <h1 class="text-2xl font-bold mb-6">Cadastro do filme do Utilizador</h1>


                @csrf

                <!-- Nome do Filme -->
                <div class="mb-4">
                    <label class="block text-gray-700">Nome do Filme</label>
                    <input type="text" name="nome_filme" class="w-full p-2 border rounded" required>
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

                <!-- Botão -->
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Cadastrar Filme
                    </button>
                </div>
         </div>
    </form>
</x-guestLayout>
