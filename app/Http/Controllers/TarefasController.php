<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

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

  public function teste(){
    $incompleto = Tarefa::where('status', '=', 0)->get();
    $completo = Tarefa::where('status', '=', 1)->get();

    return view('teste',[
      'complete'=> $completo,
      'inative'=>  $incompleto
      ]);
  }

public function inserirTarefa(Request $request){

   $tarefa = new Tarefa();
   $tarefa->create($request->all());

  
return redirect('/teste');

}


public function atualizarDados(Request $request){

  $tarefa = new Tarefa();
  $tarefa->create($request->all());

 
return redirect('/teste');

}

}
