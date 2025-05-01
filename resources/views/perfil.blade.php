<x-guestLayout>
    <div class="max-w-2xl mx-auto border-x border-gray-800 min-h-screen text-white bg-black">
        <!-- Banner -->
        <div class="relative">
            <div class="h-48 w-full">
                <img src="{{ asset('storage/' . $user->banner) }}" class="h-full w-full object-cover" alt="Banner">
            </div>
            <!-- Foto de Perfil -->
            <div class="absolute -bottom-16 left-4">
                <div class="h-32 w-32 rounded-full border-4 border-black bg-gray-700 overflow-hidden">
                    <img src="{{ asset('storage/' . $user->Foto_Perfil) }}" class="h-full w-full object-cover" alt="Foto de perfil">
                </div>
            </div>
        </div>

        <!-- Nome, bio, etc. -->
        <div class="px-4 pt-6">
            <h1 class="font-bold text-xl">{{ $user->Name }}</h1>
            <p class="text-gray-500">@{{ Str::slug($user->Name, '_') }}</p>
            <p class="my-3">{{ $user->bio }}</p>

            <div class="flex flex-wrap gap-4 text-gray-500 text-sm my-2">
                <div class="flex items-center"><i class="fas fa-map-marker-alt mr-1"></i>{{ $user->pais }}</div>
                <div class="flex items-center"><i class="fas fa-link mr-1"></i><a href="{{ $user->link }}" target="_blank" class="text-blue-500 hover:underline">{{ $user->link }}</a></div>
                <div class="flex items-center"><i class="far fa-calendar mr-1"></i>Juntou-se em {{ $user->created_at->translatedFormat('F \d\e Y') }}</div>
            </div>
        </div>

        <!-- Abas -->
        <div class="flex border-b border-gray-800 mt-3">
            <div class="flex-1 text-center py-4 font-bold border-b-4 border-blue-500 cursor-pointer">Vídeos</div>
            <div class="flex-1 text-center py-4 text-gray-500 cursor-pointer">Comentários</div>
            @if($isOwner)
                <div class="flex-1 text-center py-4 text-gray-500 cursor-pointer">Watchlist</div>
            @endif
        </div>

        <!-- Grid de vídeos -->
        <div class="grid grid-cols-2 gap-0.5 p-0.5">
            @foreach($videos as $video)
                <div class="bg-gray-900 hover:bg-gray-800 cursor-pointer">
                    <div class="video-thumbnail relative">
                        <img src="{{ asset('storage/' . $video->thumbnail) }}" class="w-full h-auto object-cover" />
                        <div class="play-icon absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-full p-2">
                            <i class="fas fa-play text-white"></i>
                        </div>
                    </div>
                    <div class="p-2">
                        <p class="font-medium truncate">{{ $video->titulo }}</p>
                        <p class="text-gray-500 text-sm">{{ $video->visualizacoes }} visualizações · {{ $video->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Comentários -->
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Comentários</h2>
            @foreach($comentarios as $comentario)
                <div class="mb-4 border-b border-gray-800 pb-2">
                    <p class="text-sm text-gray-300">Comentou em <strong>{{ $comentario->film->titulo }}</strong></p>
                    <p>{{ $comentario->conteudo }}</p>
                    <p class="text-gray-500 text-xs">{{ $comentario->created_at->diffForHumans() }}</p>
                </div>
            @endforeach
        </div>

        <!-- Watchlist -->
        @if($isOwner)
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Watchlist</h2>
            @foreach($watchlist as $item)
                <div class="mb-2">
                    <p class="text-white">{{ $item->titulo }}</p>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</x-guestLayout>
