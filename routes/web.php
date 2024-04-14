<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DirecaoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate'); // Rota para autenticação
Route::get('/inicio', [App\Http\Controllers\HomescreenController::class, 'index'])->name('homescreen.index');
Route::resource("/direcao", DirecaoController::class);
Route::resource("/docente", DocenteController::class);
Route::resource("/aluno", AlunoController::class);
Route::resource("/disciplina", DisciplinaController::class);
Route::resource("/turma", TurmaController::class);