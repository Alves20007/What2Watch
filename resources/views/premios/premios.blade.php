<x-guestLayout>
    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto">
        @foreach ($premiacao as $premio)
            <a href="/atores/{{ $premio->Slug }}">
                <div class="border-2 p-4">
                    <img class="h-64 object-cover" src="/images/{{ $premio->image }}">
                    <b class="text-neutral-50">{{ $premio->Name }}</b>
                    <p class="font-italic text-neutral-50">{{ $premio->day }}</p>                    
                </div>
            </a>
        @endforeach
    </div>
</x-guestLayout>
