<x-guestLayout>
    <div class="max-w-6xl mx-auto px-4 py-6">
        <h2 class="text-3xl font-bold text-neutral-100 mb-6">Últimas Notícias</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($premiacao as $premio)
                <a href="/premios/{{$premio->slug}}" class="bg-neutral-900 border border-neutral-700 rounded-xl overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">
                    <img src="/images/{{ $premio->imagem }}" alt="{{ $premio->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-white mb-2">{{ $premio->title }}</h3>
                        <p class="text-sm text-neutral-400 line-clamp-3">{{ Str::limit(strip_tags($premio->premio), 100) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>

