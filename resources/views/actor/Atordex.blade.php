<x-guestLayout>
    <div class="max-w-4xl mx-auto p-4">
        <div class="my-8 flex gap-4">
            <x-button class="bg-orange-500 hover:bg-orange-600 text-white">
                <a href="{{ url('filmes') }}">Todos</a>
            </x-button>
            <x-button class="bg-orange-700 hover:bg-orange-500 text-slate-950 border border-zinc-300">
                <a href="{{ url('series') }}">Filmes</a>
            </x-button>
            <x-button class="bg-yellow-500 hover:bg-orange-500 text-slate-950 border border-zinc-300">
                <a href="{{ url('video/utilizador') }}">Series</a>
            </x-button>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
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
    </div>
</x-guestLayout>
