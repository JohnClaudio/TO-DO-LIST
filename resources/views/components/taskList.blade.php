<div class="container">
    <button class="bg-dark btn-add text-white rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"> Dashboard
    </button>

    @component('components.taskTable',['concluida'=>$status, 'andamento'=>$inative]) 
    @endcomponent

    
</div>

  
