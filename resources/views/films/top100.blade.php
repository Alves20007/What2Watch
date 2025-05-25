<x-guestLayout>
    <div class="max-w-4xl mx-auto p-4 bg-neutral-900 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="md:col-span-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($films as $film)
                        <a href="/filmes/{{ $film->slug }}" class="block hover:shadow-lg transition-shadow duration-300">
                            <div class="rounded-lg overflow-hidden p-4 bg-zinc-800 border border-zinc-700">
                                <!-- Imagem do filme -->
                                <img 
                                    class="h-64 w-full object-cover rounded-t-lg" 
                                    src="/images/{{ $film->image }}" 
                                    alt="{{ $film->title }} - Poster" 
                                    loading="lazy"
                                >

                                <!-- Informações do filme -->
                                <div class="mt-2">
                                    <h3 class="font-bold text-neutral-200 text-lg">{{ $film->title }}</h3>
                                    <p class="text-sm text-neutral-400">{{ $film->Data }}</p>
                                    <!-- Avaliação -->
                                    <div class="flex items-center mt-2">
                                        <div class="flex mr-2">
                                            @php $roundedRating = round($film->average_rating) @endphp
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $roundedRating)
                                                    <span class="text-yellow-500">★</span>
                                                @else
                                                    <span class="text-gray-500">★</span>
                                                @endif
                                            @endfor
                                        </div>
                                        <span class="text-neutral-300 text-sm">
                                            {{ number_format($film->average_rating, 1) }} ({{ $film->reviews_count }})
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const searchButton = document.getElementById("searchButton");
                
                searchButton.addEventListener("click", function () {
                    // Coletar filtros selecionados
                    const categorias = Array.from(document.querySelectorAll("input[name='categorias[]']:checked"))
                                        .map(cb => cb.value);
                    
                    const tipos = Array.from(document.querySelectorAll("input[name='tipos[]']:checked"))
                                    .map(cb => cb.value);

                    const CE = Array.from(document.querySelectorAll("input[name='CE[]']:checked"))
                                    .map(cb => cb.value);

                    fetch("/filmes/filter", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Content-Type": "application/json",
                            "Accept": "application/json"
                        },
                        body: JSON.stringify({
                            categorias: categorias,
                            tipos: tipos,
                            CE: CE
                        }),
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erro na requisição');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.html) {
                            document.querySelector(".grid.grid-cols-1.sm\\:grid-cols-2.lg\\:grid-cols-3.gap-4").innerHTML = data.html;
                        } else {
                            console.error("Resposta inesperada:", data);
                        }
                    })
                    .catch(error => {
                        console.error("Erro:", error);
                        alert("Ocorreu um erro ao aplicar os filtros.");
                    });
                });
            });
        </script>
    </div>
</x-guestLayout>