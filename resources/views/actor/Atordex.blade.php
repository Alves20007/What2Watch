<x-guestLayout>
    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto">
        @foreach ($actor as $ator)
            <a href="/atores/{{ $ator->Slug }}">
                <div class="border-2 p-4">
                    <img class="h-64 object-cover" src="/imagens/atores/{{ $ator->image }}">
                    <b class="text-neutral-50">{{ $ator->Name }}    </b>
                    <p class="font-italic text-neutral-50">{{ $ator->birthday }}</p>                    
                </div>
            </a>
        @endforeach
    </div>
</x-guestLayout>
