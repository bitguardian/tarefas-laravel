<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/', [TarefaController::class, 'index']);
Route::get('/nova', [TarefaController::class, 'create']);
Route::post('/salvar', [TarefaController::class, 'store']);
Route::get('/editar/{id}', [TarefaController::class, 'edit']);
Route::post('/atualizar/{id}', [TarefaController::class, 'update']);
Route::post('/excluir/{id}', [TarefaController::class, 'destroy']);