<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acceso extends Controller
{
    //public function __invoke()
    public function acceso()
    {
        return view('autenticacion.acceso');
    }
    public function accesoV(){
        $user = User::create(request(['numeroDni','contraseña']));
        auth()->login($user);
        return redirect()->to('panel');
    }
}

