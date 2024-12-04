<x-guestLayout>
    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto">
        @foreach ($atores as $ator)
            <a href="/atores/{{$ator->slug}}">
                <div class="border-2 p-4">
                    <img class="h-64 object-cover" src="/imagens/atores/{{ $ator->imagem }}" >
                    {{--<a class="font-bold" href="{{ $ator->url }}">{{ $ator->NomeAD }}</a>--}}
                </div>
            </a>
        @endforeach
    </div>
</x-guestLayout>