@foreach ($actors as $ator)
    <a href="/atores/{{ $ator->Slug }}">
        <div class="border-2 p-4 ">
            <img class="h-64 object-cover" src="/imagens/atores/{{ $ator->image }}">
            <b class="text-neutral-50">{{ $ator->Name }}</b>
            <p class="font-italic text-neutral-50">{{ $ator->birthday }}</p>
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
