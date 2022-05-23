<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class MenuPago extends Component
{
    public function render()
    {
        return view('livewire.content.menu-pago')
        ->extends('base.basec')
        ->section('contenidoEnBody');
    }
}
