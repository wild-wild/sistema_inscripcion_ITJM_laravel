<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function loginAdmin()
    {
        return view('auth.loginAdmin');
    }
}
