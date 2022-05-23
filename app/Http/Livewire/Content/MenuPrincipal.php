<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class MenuPrincipal extends Component
{
    public function render()
    {
        return view('livewire.content.menu-principal')
        ->extends('base.basec')
        ->section('contenidoEnBody');
    }
}
