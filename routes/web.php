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

Route::get('/', [TarefasController::class, 'mostrarTarefas']);
Route::get('/teste', [TarefasController::class, 'teste']);
Route::post('/teste', [TarefasController::class, 'inserirTarefa']);
Route::patch('/teste', [TarefasController::class, 'atualizarDados']);
/*
Route::prefix('admin')->group(function () {

    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });

    Route::get('/clientes', function () {
        // Matches The "/admin/users" URL
    });

});
//Route::get('/minha', [App\Http\Controllers\ApiController::class, 'index']);

Route::get('/nome', function(){
  return 'oi amigos';
});


Route::fallback(function(){
  return 'pagina invalida';
});
*/
