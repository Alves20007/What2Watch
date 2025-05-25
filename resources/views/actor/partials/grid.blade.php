@foreach ($actors as $ator)
    <a href="/atores/{{ $ator->Slug }}">
        <div class="aspect-w-2 aspect-h-3">
            <img class="object-cover w-full h-[500px] rounded" src="/imagens/atores/{{ $ator->image }}" alt="{{ $ator->Name }}">
            <b class="block text-neutral-50 mt-2 text-base">{{ $ator->Name }}</b>
            <p class="text-sm text-neutral-300 italic">{{ $ator->birthday }}</p>
        </div>
    </a>
@endforeach
 

{{-- 
<div class="ml-2 pr-4">
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($actors as $ator)
            <a href="/atores/{{ $ator->Slug }}" class="block">
                <div class="bg-gray-900 rounded-lg shadow overflow-hidden">
                    <!-- Imagem com altura fixa -->
                    <img src="/imagens/atores/{{ $ator->image }}"
                         alt="{{ $ator->Name }}"
                         class="w-full h-[320px] object-cover">
                    
                    <!-- Informações -->
                    <div class="p-3 text-center">
                        <b class="block text-neutral-50 text-base">{{ $ator->Name }}</b>
                        <p class="text-sm text-neutral-300 italic">{{ $ator->birthday }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div> --}}
