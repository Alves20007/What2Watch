<x-guestLayout>
    <div class="max-w-4xl m-auto">

        <div class="my-8">
            <x-button  class="bg-orange-500 ">
                <a href="{{ url('filmes') }}">Filmes</a></x-button>
            <x-button url="/" class="bg-zinc-50 hover:bg-orange-500 text-slate-950">
                <a href="{{ url('series') }}">series</a></x-button>
        </div>
    
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach ($films as $film)
                <a href="/filmes/{{$film->slug}}">
                    <div class="border-2 p-4">
                        <img class="h-64 object-cover" src="/images/films/{{ $film->image }}" >
                        <b>{{ $film->title }}</b>
                        <p class="font-italic">{{ $film->Data }}</p>
                        <p class="font-italic">{{ $film->PCategoria }}</p>
                        
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-guestLayout>|