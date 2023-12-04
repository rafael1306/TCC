<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AtividadeController;
use App\Models\Atividade;

Route::get('/', [AtividadeController::class, 'atividadeView']);

Route::get('/login',[UsuarioController::class, 'loginView']);

Route::get('/historico', [AtividadeController::class, 'historicoView']);

Route::get('/criacao', [AtividadeController::class, 'criacaoView']);
Route::post('/criacao', [AtividadeController::class, 'criacaoEnviar']);

Route::get('/excluir/{id}', [AtividadeController::class, 'excluir']);

Route::get('/concluir/{id}', [AtividadeController::class, 'concluirView']);
Route::get('/salvar-conclusao/{id}', [AtividadeController::class, 'salvarConclusao']);

Route::get('/perfil', [UsuarioController::class, 'perfilView']);

Route::get('/usuario/criacao', [UsuarioController::class, 'criacaoView']);
Route::post('/usuario/criacao', [UsuarioController::class, 'criacaoSalvar']);
