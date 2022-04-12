<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioControler extends Controller
{
    public function __invoke()
    {
    return view('welcome');
    }

    public function regsitro()
    {
    //return view('registro');
    return "hola";
    }
}
