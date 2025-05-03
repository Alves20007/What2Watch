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

        <!-- Info -->
        <div class="px-4 pt-6">
            <h1 class="font-bold text-xl">{{ $user->Name }}</h1>
            <p class="text-gray-500">@{{ Str::slug($user->Name, '_') }}</p>
            <p class="my-3">{{ $user->bio }}</p>
        </div>

        <!-- Watchlist -->
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Minha Watchlist</h2>
            @forelse($watchlist as $item)
                <div class="mb-2">
                    <p class="text-white">{{ $item->titulo }}</p>
                </div>
            @empty
                <p class="text-gray-500">Nenhum filme salvo ainda.</p>
            @endforelse
        </div>
    </div>
</x-guestLayout>
