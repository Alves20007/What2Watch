<x-guestLayout>
    <div class="max-w-4xl m-auto">
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($noticiaFilme as $noticias)
                <a href="/Lançamentos/{{$noticias->slug}}">
                    <div class="border-2 p-4 truncate overflow-hidden">
                        <img class="h-64 object-cover" src="/imagens/NoticiasFilmeSeries/{{ $noticias->imagem }}" >
                        <b>{{ $noticias->title }}</b>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>