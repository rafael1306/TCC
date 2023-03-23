<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AtividadeController;

Route::get('/', [UsuarioController::class, 'loginView']);

Route::get('/atividade',[AtividadeController::class, 'atividadeView']);

Route::get('/perfil', [UsuarioController::class, 'perfilView']);

Route::get('/criacao', [AtividadeController::class, 'criacaoView']);
