<div class="my-8 flex flex-col items-center gap-10 flex-1">
    <form class="print:hidden">
        <textarea wire:model.live="message" id="" cols="30" rows="10" class="bg-white/10 text-white py-2 px-3 rounded-xl"></textarea>
        <div class="mt-2 flex justify-end">
            <button @click="window.print()" class="bg-blue-500 rounded-md px-2 py-1">Print</button>
        </div>
    </form>    

    <x-code :message="$message" :letters="$this->letters" />  

    <x-legend :letters="$this->letters" /> 
</div>
