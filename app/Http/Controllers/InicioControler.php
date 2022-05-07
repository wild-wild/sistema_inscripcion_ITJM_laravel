<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioControler extends Controller
{
    
    public function panel()
    {
        return view('panel');
    }
    
}
