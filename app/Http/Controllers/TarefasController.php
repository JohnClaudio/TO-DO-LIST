<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Crypt;

class TarefasController extends Controller
{

  public function mostrarTarefas(){
    $incompleto = Tarefa::where('status', '=', 0)->get();
    $completo = Tarefa::where('status', '=', 1)->get();

    return view('tasks',[
      'complete'=> $completo,
      'inative'=>  $incompleto
      ]);
  }

public function inserirTarefa(Request $request){

   $tarefa = new Tarefa();
   $tarefa->fill(['tarefa'=> $request->tarefa, 'status'=>0]);
   $tarefa->save();
  // $tarefa->create($request->all());

  
return redirect('/')->with('message','A Tarefa: '. $tarefa->tarefa. ' foi cadastrada com sucesso');

}

public function atualizarDados(Request $request){

  $id_task = Crypt::decrypt($request->id);
  $tarefa = new Tarefa();
  $tarefa = Tarefa::find($id_task);
  $tarefa->status = 1;
  $tarefa->save();
  return redirect('/')->with('message','A Tarefa: '. $tarefa->tarefa. ' foi atualizada com sucesso');

}

public function deletarTarefa(Request $request){

  
  $id_task = Crypt::decrypt($request->id);
  $tarefa = new Tarefa();
  $tarefa = Tarefa::find($id_task);
  $nameTarefa = $tarefa->tarefa;
  $tarefa->delete();
  return redirect('/')->with('message','A Tarefa: '. $nameTarefa. ' foi deletada com sucesso');

}

}
