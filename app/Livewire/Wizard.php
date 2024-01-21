<?php

namespace App\Livewire;

use Livewire\Component;

class Wizard extends Component
{
    public $step;
    public $completed;

    public function mount()
    {
        $this->step = 1;
        $this->completed = [
            1 => 'Uno'
        ];
    }

    public function render()
    {
        return view('livewire.wizard');
    }
}
