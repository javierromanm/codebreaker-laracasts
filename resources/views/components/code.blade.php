@props([
    'message',
    'letters'    
])

<div class="text-center flex gap-7 flex-wrap mt-auto">
    @foreach(explode(' ', $message) as $word)
        <div class="flex gap-x-2">
            @foreach(str_split($word) as $character)
            <div>
                <span class="material-symbols-outlined !text-4xl">
                    {{ $letters[strtolower($character)] ?? $character }}
                </span>
                <div class="bg-gray-200 border print:border-gray-400 h-12 w-12">

                </div>

            </div>
                
            @endforeach
        </div>
    @endforeach    
</div>