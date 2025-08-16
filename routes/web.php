<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');

Route::get('/professores', [ProfessorController::class, 'index'])->name('professores.index');

Route::get('/treinos', [TreinoController::class, 'index'])->name('treinos.index');

Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');

Route::get('/administrador', [AdministradorController::class, 'index'])->name('administrador.index');
