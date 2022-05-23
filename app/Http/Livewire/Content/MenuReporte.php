<?php

namespace App\Http\Livewire\Content;

use Livewire\Component;

class MenuReporte extends Component
{
    public function render()
    {
        return view('livewire.content.menu-reporte')
        ->extends('base.basec')
        ->section('contenidoEnBody');
    }
}
