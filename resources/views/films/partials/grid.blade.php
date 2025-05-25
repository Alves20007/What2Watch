<div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
    @foreach ($films as $film)
        <a href="/filmes/{{ $film->slug }}" class="group block transition-transform duration-300 hover:scale-[1.02]">
            <div class="bg-zinc-900 rounded-xl overflow-hidden shadow-lg ring-1 ring-zinc-700">
                <!-- Imagem do filme -->
                <div class="overflow-hidden">
                    <img 
                        src="/images/{{ $film->image }}" 
                        alt="{{ $film->title }} - Poster" 
                        class="w-full aspect-[2/3] object-cover transition-transform duration-500 group-hover:scale-105 rounded-t-xl"
                        loading="lazy"
                    >
                </div>
                <!-- Informações do filme -->
                <div class="p-3">
                    <h3 class="font-semibold text-neutral-100 text-base">{{ $film->title }}</h3>
                    <p class="text-sm text-neutral-400">
                        @php
                            try {
                                $data = $film->Data;
                                if (str_contains($data, '/')) {
                                    $dataFormatada = \Carbon\Carbon::createFromFormat('d/m/Y', $data)->format('d/m/Y');
                                } else {
                                    $dataFormatada = \Carbon\Carbon::parse($data)->format('d/m/Y');
                                }
                            } catch (\Exception $e) {
                                $dataFormatada = 'Data inválida';
                            }
                        @endphp
                        {{ $dataFormatada }}
                    </p>
                </div>
            </div>
        </a>
    @endforeach
</div>
