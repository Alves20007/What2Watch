<x-guestLayout>
    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto">
        @foreach ($films as $film)
            <div class="border-2 p-4">
                <img class="h-64" src="/images/films/{{ $film->image }}" >
                <a class="font-bold" href="{{ $film->url }}">{{ $film->title }}</a>
                <p class="font-italic">{{ $film->Data }}</p>
                <p class="font-italic">{{ $film->PCategoria }}</p>
                <p class="font-italic">{{ $film->categoria }}</p>
                <!-- <button type="butao" >{{$film->PCategoria}} </button> -->
            </div>
        @endforeach
    </div>
</x-guestLayout>