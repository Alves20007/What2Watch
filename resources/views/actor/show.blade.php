<x-guestLayout>
    <div class="p-6 text-white bg-neutral-800">
        <div class="flex items-center gap-4">
            <img src="/actors/{{ $actor->image }}" class="h-40 w-40 rounded-full object-cover" alt="{{ $actor->FullName }}">
            <div>
                <h1 class="text-3xl font-bold text-yellow-400">{{ $actor->FullName }}</h1>
                <p class="text-gray-400">{{ $actor->profissao }}</p>
            </div>
        </div>

        <h2 class="mt-8 text-2xl font-semibold text-yellow-400">Filmes em que participou</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
            @foreach($actor->films as $film)
                <a href="{{ route('filmes.show', $film) }}" class="bg-neutral-700 rounded p-2 shadow hover:shadow-lg transition">
                    <img src="/images/{{ $film->image }}" class="h-40 w-full object-cover rounded" alt="{{ $film->title }}">
                    <p class="mt-2 font-semibold">{{ $film->title }}</p>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>
