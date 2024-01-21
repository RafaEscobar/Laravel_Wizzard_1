<?php

namespace App\Livewire;

use Livewire\Component;

class Wizard extends Component
{
    public $step;
    public $completed;
    public $steps;

    public function mount()
    {
        $this->step = 1;
        $this->steps = ['Uno', 'Dos', 'Tres', 'Cuatro'];
        $this->completed = [];
    }

    public function render()
    {
        return view('livewire.wizard');
    }

    public function nextStep()
    {
        if ($this->step < 4) {
            $previouStep = $this->step;
            $this->step += 1;
            $this->completed[$previouStep] = $this->steps[$previouStep - 1];
        }
    }

    public function prevStep()
    {
        $lastStep = $this->step;
        $this->step -= 1;
        unset($this->completed[$lastStep-1]);
    }
}
