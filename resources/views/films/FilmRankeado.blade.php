<x-guestLayout>
    <div class="max-w-4xl mx-auto p-4">
        <!-- Grid de filmes -->
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($films as $film)
                    <div class="border-2 border-gray-200 rounded-lg overflow-hidden p-4">
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
                            <p class="text-sm text-neutral-200">{{ $film->Data }}</p>
                            {{-- <p class="text-sm text-gray-600">{{ $film->PCategoria }}</p> --}}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>