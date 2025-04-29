<x-guestLayout>
    <div class="max-w-5xl mx-auto px-4 py-8 text-white">
        <h1 class="text-2xl font-semibold mb-4">
            Resultados para: <span class="text-orange-600">"{{ request('query') }}"</span>
        </h1>

        {{-- Barra de Pesquisa --}}
        <form action="{{ route('search') }}" method="GET" class="mb-8 flex flex-col md:flex-row items-center gap-2">
            <input 
                type="text" 
                name="query" 
                value="{{ request('query') }}" 
                placeholder="Pesquisar novamente..." 
                class="w-full md:w-1/2 px-4 py-2 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-blue-700 transition"
            >
            <button 
                type="submit" 
                class="bg-orange-600 hover:bg-orange-700 text-white font-semibold px-4 py-2 rounded-lg transition w-[100px] ">
                🔍 
            </button>
        </form>
        
        {{-- FILMES --}}
        @if($results['films']->isNotEmpty())
            <h2 class="text-xl font-bold mb-4">🎬 Filmes & Séries</h2>
            <div class="space-y-4">
                @foreach ($results['films'] as $film)
                    <a href="/filmes/{{ $film->slug }}" class="flex items-center bg-neutral-900 rounded-lg shadow hover:shadow-lg transition p-3 hover:bg-neutral-800">
                        <img 
                            src="/images/{{ $film->image }}" 
                            alt="{{ $film->title }}" 
                            class="w-16 h-24 object-cover rounded mr-4"
                        >
                        <span class="text-lg font-medium">{{ $film->title }}</span>
                    </a>
                @endforeach
            </div>
        @endif

        {{-- ATORES --}}
        @if($results['actors']->isNotEmpty())
            <h2 class="text-xl font-bold mt-10 mb-4">🎭 Atores</h2>
            <div class="space-y-4">
                @foreach ($results['actors'] as $actor)
                    <a href="/atores/{{ $actor->id }}" class="flex items-center bg-neutral-900 rounded-lg shadow hover:shadow-lg transition p-3 hover:bg-neutral-800">
                        <img 
                            src="/imagens/atores/{{ $actor->image ?? 'default-actor.png' }}" 
                            alt="{{ $actor->Name }}" 
                            class="w-16 h-16 rounded-full object-cover mr-4"
                        >
                        <span class="text-lg font-medium">{{ $actor->Name }}</span>
                    </a>
                @endforeach
            </div>
        @endif

        {{-- UTILIZADORES --}}
        @if($results['users']->isNotEmpty())
            <h2 class="text-xl font-bold mt-10 mb-4">👤 Utilizadores</h2>
            <div class="space-y-4">
                @foreach ($results['users'] as $user)
                    <a href="/users/{{ $user->username }}" class="flex items-center bg-neutral-900 rounded-lg shadow hover:shadow-lg transition p-3 hover:bg-neutral-800">
                        <img 
                            src="/images/users/{{ $user->avatar ?? 'default-user.png' }}" 
                            alt="{{ $user->username }}" 
                            class="w-16 h-16 rounded-full object-cover mr-4"
                        >
                        <span class="text-lg font-medium">{{ $user->username }}</span>
                    </a>
                @endforeach
            </div>
        @endif

        {{-- Nenhum resultado encontrado --}}
        @if(
            $results['films']->isEmpty() &&
            $results['actors']->isEmpty() &&
            $results['users']->isEmpty()
        )
            <p class="text-gray-400 mt-10">Nenhum resultado encontrado para "<strong>{{ request('query') }}</strong>".</p>
        @endif
    </div>
</x-guestLayout>
