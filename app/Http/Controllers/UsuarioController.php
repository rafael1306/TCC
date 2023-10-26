<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
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

    public function criacaoView()
    {
        return view('usuario/criacao');
    }

    public function criacaoSalvar(Request $form)
    {
        $usuario = new Usuario();
        $usuario->nome = $form->input('nome');
        $usuario->data_nascimento = $form->input('data_nascimento');
        $usuario->senha = $form->input('senha');
        $usuario->save();
        return redirect('/');
    }
}

