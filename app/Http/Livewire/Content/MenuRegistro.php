<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class MenuRegistro extends Component
{
    public function render()
    {
        return view('livewire.content.menu-registro')
        ->extends('base.basec')
        ->section('contenidoEnBody');
    }
}
