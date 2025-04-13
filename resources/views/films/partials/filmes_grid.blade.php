@foreach ($films as $film)
    <a href="/filmes/{{ $film->slug }}" class="block hover:shadow-lg transition-shadow duration-300">
        <div class="border-2 border-gray-200 rounded-lg overflow-hidden p-4">
            <img 
                class="h-64 w-full object-cover rounded-t-lg" 
                src="/images/{{ $film->image }}" 
                alt="{{ $film->title }} - Poster" 
                loading="lazy"
            >
            <div class="mt-2">
                <h3 class="font-bold text-neutral-200 text-lg">{{ $film->title }}</h3>
                <p class="text-sm text-neutral-200">{{ $film->Data }}</p>
                <button 
                    onclick="event.stopPropagation(); addToWatchLater({{ $film->id }})" 
                    class=" text-white px-4 rounded-full shadow hover:bg-blue-600 transition">
                    📁
                </button>
                <div class="flex items-center mt-2">
                    <div class="flex mr-2">
                        @php $roundedRating = round($film->average_rating) @endphp
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $roundedRating)
                                <span class="text-yellow-500">★</span>
                            @else
                                <span class="text-gray-400">★</span>
                            @endif
                        @endfor
                    </div>
                    <span class="text-neutral-300 text-sm">
                        {{ number_format($film->average_rating, 1) }} ({{ $film->reviews_count }})
                    </span>
                </div>
            </div>
        </div>
    </a>
@endforeach