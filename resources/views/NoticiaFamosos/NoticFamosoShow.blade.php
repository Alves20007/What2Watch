<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>
    <section class="intro">
        <h1>{{ $noticiaFamosos->title }}</h1>
        <p></p>
    </section>

    <section class="section">
        <div class="text">
            <img class="h-64 object-cover" src="/imagens/NoticiasAtores/{{ $noticiaFamosos->imagem }}">
            <p>{{$noticiaFamosos->noticia}}</p>
        </div>
    </section>

</x-guestLayout>