<?php

namespace App\Livewire;

use Livewire\Component;

class CreateCode extends Component
{
    public int $count = 23;

    public function increment() {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
