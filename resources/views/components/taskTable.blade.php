<div class="collapse" id="dashboard-collapse">
  
@foreach ($concluida as $tarefa)  
<table class="table table-striped">
  <tbody>
    <tr>
      <td> 
      <input type="text" name="tarefa" style="text-decoration: line-through;" value ="{{ $tarefa->tarefa }}" disabled>
       </td>           
      <td><label class="text-white">FEITO</label></td>
      <td><a href="" class="p-2 text-btn"> UPDATE</a></td>       
    </tr>
  </tbody>
</table>
@endforeach

<tr>
  <button class="bg-dark btn-add text-white rounded"> Tarefas Realizadas</button>
</tr>  

@foreach ($andamento as $tarefa)  
<table class="table table-striped">
  <tbody>
    <tr>
      <td> 
      <input type="text" name="tarefa" style="text-decoration: line-through;" value ="{{ $tarefa->tarefa }}" disabled>
       </td>           
      <td><label class="text-success">ANDAMENTO </label></td>
      <td><a href="" class="p-2 text-btn"> UPDATE</a></td>       
    </tr>
  </tbody>
</table>
@endforeach

</div>