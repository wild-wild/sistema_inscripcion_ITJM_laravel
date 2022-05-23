<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function accesoV(){
        // $user = User::create(request(['numeroDni','contraseña']));
        // auth()->login($user);
        // return redirect()->to('panel');
    }
}
