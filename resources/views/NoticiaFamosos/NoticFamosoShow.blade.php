<x-guestLayout>
    <div class="max-w-3xl mx-auto px-4 py-8 text-neutral-200">
        <h1 class="text-4xl font-bold mb-6">{{ $noticiaFamosos->title }}</h1>
        <img src="/imagens/NotciaAtores/{{ $noticiaFamosos->imagem }}" alt="{{ $noticiaFamosos->title }}" class="w-full h-auto rounded-xl shadow mb-6">
        <article class="prose prose-invert prose-lg max-w-none">
            {!! nl2br(e($noticiaFamosos->noticia)) !!}
        </article>
    </div>
</x-guestLayout>
