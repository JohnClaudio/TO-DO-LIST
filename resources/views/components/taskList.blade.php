<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="d-flex flex-row">


  <form action="{{route('inserirTarefa')}}" method="POST" class="mt-4">
    @csrf
    <div class="input-group mb-3">
    
      <div class="input-group-prepend">
        <button class="btn btn-outline-secondary" type="submit">Adicionar</button>
      </div>
      <input name="tarefa" type="text" class="form-control" required>
    </div>
</form>

<button class="btn btn-link collapsed ms-4 " style="text-decoration:none"data-bs-toggle="collapse" data-bs-target="#tarefasFeitas" aria-expanded="true" aria-controls="tarefasFeitas">
    Tarefas em andamento
  </button>

    <button class="btn btn-link collapsed" style="text-decoration:none;" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true" aria-controls="tarefasFeitas">
        Tarefas Concluidas
      </button>
    </div>

    @component('components.taskTable',['concluida'=>$status, 'andamento'=>$inative]) 
    @endcomponent

    
</div>

  
