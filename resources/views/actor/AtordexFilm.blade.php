<x-guestLayout>
    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto">
        @foreach ($actor as $atores)
            <a href="/atores/{{ $atores->Slug }}">
                <div class="border-2 p-4">
                    <img class="h-64 object-cover" src="/imagens/atores/{{ $atores->image }}">
                    <b class="text-neutral-50">{{ $atores->Name }}</b>
                    <p class="font-italic text-neutral-50">{{ $atores->birthday }}</p>                    
                </div>
            </a>
        @endforeach

        @foreach ($film as $films)
            <a href="/filmes/{{ $films->Slug }}">
                <div class="border-2 p-4 text-neutral-50">
                    <img class="h-64 object-cover" src="/images/{{ $films->image }}">
                    <b>{{ $films->title }}</b>
                    <p class="font-italic text-neutral-50">{{ $films->Data }}</p>                    
                </div>
            </a>
        @endforeach
    </div>
</x-guestLayout>
