<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AtividadeController;

Route::get('/', [AtividadeController::class, 'atividadeView']);

Route::get('/login',[UsuarioController::class, 'loginView']);

Route::get('/historico', [AtividadeController::class, 'historicoView']);

Route::get('/criacao', [AtividadeController::class, 'criacaoView']);

Route::get('/concluir', [AtividadeController::class, 'concluirView']);

Route::get('/perfil', [UsuarioController::class, 'perfilView']);
