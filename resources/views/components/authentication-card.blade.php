<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-neutral-800 ">
    <div>
        {{-- {{ $logo }} --}}
        <img src="{{ asset('imagens/logo.png') }}" alt="Logo" class="w-20 h-20 object-scale-down mx-auto">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-zinc-100  shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
