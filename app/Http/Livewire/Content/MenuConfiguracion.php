<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class MenuConfiguracion extends Component
{
    public function render()
    {
        return view('livewire.content.menu-configuracion')
        ->extends('base.basec')
        ->section('contenidoEnBody');
    }
}
