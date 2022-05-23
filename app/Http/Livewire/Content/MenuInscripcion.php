<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class MenuInscripcion extends Component
{
    public function render()
    {
        return view('livewire.content.menu-inscripcion')
        ->extends('base.basec')
        ->section('contenidoEnBody');
    }
}
