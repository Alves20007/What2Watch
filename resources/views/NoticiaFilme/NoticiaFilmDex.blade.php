<x-guestLayout>
    <div class="max-w-4xl m-auto">
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($noticiaFilme as $noticia)
                <a href="/series/{{$noticia->slug}}">
                    <div class="border-2 p-4">
                        <img class="h-64 object-cover" src="/imagens/NoticiasFilmeSeries/{{ $noticia->imagem }}" >
                        <b>{{ $noticia->title }}</b>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>