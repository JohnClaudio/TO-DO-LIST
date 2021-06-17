<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;

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

Route::get('/', [TarefasController::class, 'mostrarTarefas'])->name('mostrarTarefas');
Route::post('/addtask', [TarefasController::class, 'inserirTarefa'])->name('inserirTarefa');
Route::patch('/taskupdate/{id}', [TarefasController::class, 'atualizarDados'])->name('atualizarTarefa');
Route::delete('/taskdelete/{id}', [TarefasController::class, 'deletarTarefa'])->name('deletarTarefa');

