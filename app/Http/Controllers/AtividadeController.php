<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    public function atividadeView()
    {
        return view('atividade');
    }

    public function criacaoView()
    {
        return view('criacao');
    }
    
    public function historicoView()
    {
        return view('historico');
    }

    public function concluirView()
    {
        return view('concluir');
    }
    public function criacaoEnviar(Request $form)
    {
        $usuario = new Usuario();
        $usuario->nome = $form->input('nome');
        $usuario->descricao = $form->input('descricao');
        $usuario->prazo = $form->input('prazo');
        $usuario->save();
        return redirect('/');
    }
}
