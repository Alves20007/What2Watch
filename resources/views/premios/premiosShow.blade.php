    <x-guestLayout>
    <div class="max-w-3xl mx-auto px-4 py-8 text-neutral-200">
        <h1 class="text-4xl font-bold mb-6">{{ $film->title }}</h1>
        <img src="/images/{{ $film->imagem }}" alt="{{ $film->title }}" class="w-full h-auto rounded-xl shadow mb-6">
        <article class="prose prose-invert prose-lg max-w-none">
            {!! nl2br(e($film->noticia)) !!}
        </article>
    </div>
</x-guestLayout>
