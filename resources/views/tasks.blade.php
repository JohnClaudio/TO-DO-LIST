@extends('layout.template')

@section('conteudo')

<h2 class="text-light mt-4">TO DO LIST</h2>
<h6 class="text-warning">PHP, LARAVEL , BOOTSTRAP</h6>


@component('components.taskList',['status'=>$complete,'inative'=>$inative])
@endcomponent

@endsection
