@props(['url'])
<div class="bg-[#123416] p-4 hover:bg-red-900 text-white hover:underline hover:shadow-xl hover:rounded">
    <a href="{{ $url }}">{{ $slot }}</a>
</div>