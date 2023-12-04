<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    public function atividadeView()
    {
        $usuario = Usuario::first();
        $atividades = Atividade::where('status', 1)->get();

        return view('atividade', [
            'usuario' => $usuario,
            'atividades' => $atividades,
        ]);
    }

    public function criacaoView()
    {
        return view('criacao');
    }
    
    public function historicoView()
    {
        return view('historico');
    }

    public function concluirView(int $id)
    {
        $atividade = Atividade::find($id);

        return view('concluir', [
            'atividade' => $atividade,
        ]);
    }

    public function criacaoEnviar(Request $form)
    {
        $atividade = new Atividade();
        $atividade->nome = $form->input('nome');
        $atividade->descricao = $form->input('descricao');
        $atividade->prazo = $form->input('prazo');
        $atividade->nivel = $form->input('nivel');
        $atividade->save();
        return redirect('/');
    }

    public function salvarConclusao(int $id)
    {
        $atividade = Atividade::find($id);
        $usuario = Usuario::first();

        $usuario->xp += $atividade->nivel * 10;
        $usuario->save();        
        
        $atividade->status = 0;
        $atividade->save();
        return redirect('/');
    }
}
