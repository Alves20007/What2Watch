<x-guestLayout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/CG.css') }}">
    </head>
ator
    <body class="bg-neutral-700 text-white">
        <section class="relative bg-neutral-700 text-white mb-6">
            <div class="absolute inset-0">
                <img src="/banner/{{ $ator->banner }}" alt="{{ $ator->title }}" class="w-full h-full object-cover opacity-30">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/20"></div>
            </div>
        
            <div class="relative z-10 px-6 py-10 max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-6">
                <div class="w-48 h-72 overflow-hidden rounded shadow-lg">
                    <img src="/images/{{ $ator->image }}" alt="{{ $ator->title }}" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2 text-yellow-400">{{ $ator->FullName }}</h1>
                    <p class="mb-4 text-sm italic">{{ $ator->Frase }}</p>
                    <p class="mb-2"><b>profissão:</b> {{ $ator->profissao }}</p>
                    <p class="mb-2"><b>sexo:</b> {{ $ator->sexo }}</p>
                    <p class="mb-2"><b>Data de Nascimento:</b> {{ $ator->birthday }}</p>
                    <p class="mb-2"><b>Local de Nascimento: </b> {{ $ator->country }}</p>
                    <p class="mb-2"><b>Biografia:   </b>{{ $ator->bio}}</p>
                </div>
            </div>
        </section>
        <!-- Elenco principal -->
        {{-- <section class="p-6">
            <h2 class="text-2xl font-bold text-yellow-400 mb-4">Elenco Principal</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($film->actors as $actor)
                    <div class="bg-neutral-800 p-3 rounded shadow">
                        <img src="/imagens/atores/{{ $actor->image }}" alt="{{ $actor->FullName }}" class="h-64 object-cover object-cover rounded">
                        <h3 class="mt-2 font-semibold text-white">{{ $actor->FullName }}</h3>
                        <p class="text-sm text-yellow-400 italic">Personagem: {{ $actor->pivot->personagem }}</p>
                    </div>
                @endforeach
            </div>
        </section> --}}

        <!-- Críticas -->
        {{-- <section class="p-6">
            <h2 class="text-xl font-bold text-yellow-500 mb-4">Críticas</h2>
            @auth
                @if ($film->reviews->count() > 0)
                    <p>Média: <span class="font-bold">{{ number_format($film->reviews->avg('rating'), 1) }}/5</span>
                        ({{ $film->reviews->count() }} reviews)</p>
                    <div class="mt-4 space-y-4">
                        @foreach ($film->reviews as $review)
                            <div class="p-3 bg-neutral-800 rounded shadow">
                                <p class="font-semibold">{{ $review->user->name }} — Nota: {{ $review->rating }}/5</p>
                                <p class="text-neutral-100">{{ $review->comment }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>Nenhuma review ainda. Sê o primeiro a avaliar!</p>
                @endif
            @else
                <p class="text-gray-300">Faz login para ver ou escrever críticas.</p>
            @endauth
        </section> --}}
    </body>
</x-guestLayout>
