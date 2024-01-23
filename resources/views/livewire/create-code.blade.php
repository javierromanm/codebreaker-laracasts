<div class="my-8 flex flex-col items-center gap-10 flex-1">
    <form class="print:hidden w-full">
        <textarea wire:model.live="message" id="" cols="30" rows="10" class="bg-white/10 text-white py-2 px-3 rounded-xl w-full"></textarea>
        <div class="mt-2 flex justify-end">
            <button type="button" @disabled(! $message) @click="window.print()" class="bg-blue-500 rounded-md px-4 py-1 text-sm font-semibold disabled:bg-gray-300">Print</button>
        </div>
    </form>    

    <x-code :message="$message" :letters="$this->letters" />  

    @if($message)
        <x-legend :letters="$this->letters" /> 
    @endif
</div>
