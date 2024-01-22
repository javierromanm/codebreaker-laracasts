@props([
    'letters'
])
<div class="flex flex-wrap mt-auto">
    @foreach($letters as $letter => $symbol)
        <div class="flex flex-col items-center p-2 border border-white/20 print:border-gray-400">
            <span class="mb-2 font-bold">{{ ucwords($letter) }}</span>
            <span class="material-symbols-outlined">{{ $symbol }}</span>
        </div>
    @endforeach
</div>