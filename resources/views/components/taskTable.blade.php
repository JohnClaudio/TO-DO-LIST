<div class="collapse show"  id="tarefasFeitas">
    <table class="table table-striped mt-4">
        <tbody>
            @forelse ($andamento as $tarefa)
            <tr>
                <td>
                    <label class="text-white"> {{ $tarefa->tarefa }}</label>
                </td>
                
                <td>
                  <label class="text-white">ANDAMENTO </label>
                </td>


                <td class="d-flex">
                  <form action="{{route('atualizarTarefa', Crypt::encrypt($tarefa->id))}}" method="POST">
                    @csrf
                    {{ method_field('PATCH') }}
                    <button type="submit" class="btn btn-primary">FEITO</button>
                </form>   
                  
                  <form  action="{{route('deletarTarefa', Crypt::encrypt($tarefa->id))}}" method="POST">
                    @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" class="ms-2 btn btn-danger"> DELETE</button>
                  </form>                  
                </td>
                @empty
                <label class="mt-4 text-white text-center">Não há tarefas registradas no momento, adicione uma.</label>
      
            @endforelse
        <tbody>
    </table>
  </div>
  
  
<div class="collapse" id="dashboard-collapse">
    <table class="table table-striped mt-4">
        <tbody>
            @forelse ($concluida as $tarefa)
            <tr>
                <td>
                    <label class=" text-warning" style="text-decoration: line-through;"> {{ $tarefa->tarefa }}</label>
                </td>
                <td>
                  <label class="text-white">FEITO</label>
                </td>
                <td class="d-flex">
       
                    
                  <form  action="{{route('deletarTarefa', Crypt::encrypt($tarefa->id))}}" method="POST">
                    @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" class="ms-2 btn btn-danger"> DELETE</button>
                  </form>   
                    
                  </td>

            </tr>
            @empty
            <label class="text-white text-center">Não há tarefas por aqui</label>
            @endforelse

        </tbody>
    </table>
</div>