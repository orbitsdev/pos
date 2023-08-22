<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pos extends Component
{

    public $samples = [1,2,4,51,2,4,51,2,4,51,2,4,51,2,4,51,2,4,5];
    public function render()
    {
        return view('livewire.pos');
    }
}
