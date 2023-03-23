<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function perfilView()
    {
        return view('perfil');
    }
}
