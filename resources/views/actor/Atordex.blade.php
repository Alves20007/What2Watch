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
    </div>
</x-guestLayout>
