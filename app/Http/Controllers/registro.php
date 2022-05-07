<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registro extends Controller
{
    public function registro()
    {
        return view('autenticacion.registro');
    }
}
