<?php

namespace App\Http\Controllers;

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
}
