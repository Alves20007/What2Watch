<x-guestLayout>
    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto">
        @foreach ($films as $film)
            <a href="/filmes/{{$film->slug}}">
                <div class="border-2 p-4">
                    <img class="h-64 object-cover" src="/images/films/{{ $film->image }}" >
                    <b>{{ $film->title }}</b>
                    <p class="font-italic">{{ $film->Data }}</p>
                    <p class="font-italic">{{ $film->PCategoria }}</p>
                    
                </div>
            </a>
        @endforeach
    </div>
</x-guestLayout>|