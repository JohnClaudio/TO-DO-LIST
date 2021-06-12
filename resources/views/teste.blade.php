@extends('layout.template')

@section('conteudo')
  <form action="/teste" method="POST" class= "mt-4">    
      @csrf
    <div class="input-group mb-3  align-items-center justifu-content-center">

      <div class="input-group-prepend">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Botão</button>
      </div>
      <input type="text" name="tarefa" class="form-control formulario" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
    </div>

  </form>
  @component('components.taskList',['status'=>$complete,'inative'=>$inative])
  @endcomponent

@endsection