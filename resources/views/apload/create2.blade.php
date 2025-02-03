<x-guestLayout>
    
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-0000 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Cadastro do Ator</h1>


            @csrf

            <!-- Nome do Filme -->
            <div class="mb-4">
                <label class="block text-gray-700">Nome do Ator</label>
                <input type="text" name="nome_filme" class="w-full p-2 border rounded" required>
            </div>

            <!-- Slug -->

            <?php
                $uniqueKey=strtoupper(substr(sha1(microtime()), rand(0, 5), 20));  
                $uniqueKey  = implode("-", str_split($uniqueKey, 5)); 
                $slug = $uniqueKey
            ?>
            <!-- Imagem -->
            <div class="mb-4">
                <label class="block text-gray-700">Imagem</label>
                <input type="file" name="imagem" class="w-full">
            </div>

            <!-- Data -->
            <div class="mb-4">
                <label class="block text-gray-700">Data de nascimento</label>
                <input type="date" name="data" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Local de nascimento</label>
                <input type="text" name="data" class="w-full p-2 border rounded">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700">Filmes no qual participou</label>
                <input type="text" name="data" class="w-full p-2 border rounded">
            </div>
            
            <!-- Botão -->
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Cadastrar Filme
                </button>
            </div>
        </form>
    </div>
</x-guestLayout>
