<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioControler extends Controller
{
    public function __invoke()
    {
    return view('welcome');
    }

    public function registro()
    {
    return view('registro');
    }
    public function panel()
    {
        return view('panel');
    }
    public function barraLateral()
    {
        return view('barraLateral');
    }
}

