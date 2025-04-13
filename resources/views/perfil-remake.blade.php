<x-guestLayout>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <x-validation-errors />
        
        <label class = 'text-neutral-50'>Nome:</label>
        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="border p-2 w-full mb-2">
        
        <label class = 'text-neutral-50'>Email:</label>
        <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="border p-2 w-full mb-2">
        
        <div class="mb-4 text-neutral-50">
            <label for="Foto_Perfil" class="block text-neutral-50 font-medium">Foto de Perfil</label>
            <input type="file" name="Foto_Perfil" id="Foto_Perfil" class="w-full p-2 border rounded bg-gray-700 text-white">
            @if(Auth::user()->Foto_Perfil)
            <div class="mt-2">
                <img src="{{ asset('FP/' . Auth::user()->Foto_Perfil) }}"
                    alt="Foto de Perfil Atual"
                    class="w-20 h-20 rounded-full object-cover border-2 border-gray-500">
            </div>
        @endif
                </div>
    
        <label class="text-neutral-50">Bio:</label>
        <textarea name="bio" class="border p-2 w-full mb-2">{{ old('bio', Auth::user()->bio) }}</textarea>
        
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Salvar</button>
    </form>
</x-guestLayout>
