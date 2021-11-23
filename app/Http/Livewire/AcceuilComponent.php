<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcceuilComponent extends Component
{

    public function render()
    {
        return view('livewire.acceuil-component')->layout('layouts.base');
    }
}
