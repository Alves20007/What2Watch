<x-guestLayout>
    <div class="max-w-md mx-auto p-6 bg-neutral-700 rounded-lg shadow-md">
        <h1 class="text-xl font-bold mb-4 text-neutral-100">Avaliar o Filme: {{ $film->title }}</h1>
        <form action="{{ route('films.review.store', $film) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-neutral-100">Nota (1-10)</label>
                <select name="rating" class="w-full px-3 py-2 border rounded">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-neutral-100">Comentário (opcional)</label>
                <textarea name="comment" class="w-full px-3 py-2 border rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Enviar Review
            </button>
        </form>
    </div>
</x-guestLayout>