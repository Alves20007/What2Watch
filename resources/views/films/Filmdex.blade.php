<x-guestLayout>
    <style>
        .btn {
            text-decoration: none;
            padding: 0.5rem;
            border: 1px solid #ff4800;
            background: #ff4800;
        }

        .btn2 {
            color: black;    
            text-decoration: none;
            padding: 0.5rem;
            border: 1px solid #black;
            background: #black;
            }
    </style>
    <a class="btn rigth:60 grid-cols-4 gap-4 max-w-4xl m-auto" href="{{ url('acao') }}">
        1
      </a>
  
      <a class="btn2" href="{{ url('acao') }}">
        2
      </a>
    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto">
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
</x-guestLayout>|