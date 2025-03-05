<x-guestLayout>
    <div class="max-w-4xl m-auto">
                <!-- Botões de navegação -->
    <div class="my-8 flex gap-4">
        <x-button class="bg-orange-500 hover:bg-orange-600 text-white">
            <a href="{{ url('NoticiasFilmes') }}">Noticias de filmes</a>
        </x-button>
        <x-button class="bg-yellow-600 hover:bg-orange-500 text-slate-950 border border-zinc-300">
            <a href="{{ url('noticias') }}">Noticias de Famosos</a>
        </x-button>
    </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($noticiaFilme as $noticias)
                <a href="/Lançamentos/{{$noticias->slug}}">
                    <div class="border-2 p-4 truncate text-neutral-200 overflow-hidden">
                        <img class="h-64 object-cover" src="/imagens/NoticiasFilmeSeries/{{ $noticias->imagem }}" >
                        <b class="font-bold text-neutral-200 text-lg">{{ $noticias->title }}</b>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>