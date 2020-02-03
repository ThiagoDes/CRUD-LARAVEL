@section('title', 'Listagem de Tarefas')

@section('content')

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Listagem de Tarefas.</p>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Feito</th>
                <th>Tarefa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
		@if(count($list) > 0)
		@foreach($list as $item)
            <tr>
			<td>
			<a href="{{route('tarefas.done', ['intId'=>$item->id])}}">[@if ($item->resolvido===1) Realizadar @else Não Realizadar @endif]
       				</a></td>
            <td>{{$item->titulo}}</td>
            <td><a class="btn btn-warning" href="{{route('tarefas.edit', ['intId'=>$item->id])}}">Editar</a><a class="btn btn-danger" href="{{route('tarefas.del', ['intId'=>$item->id])}}" onclick="return confirm('Dejesa realmente excluir essa tarefa ?')" >Excluir</a></td>
            </tr>
			@endforeach
			@else
		Nenhuma Tarefa Encontrada
	@endif
        </tbody>
        <tfoot>
            <tr>
			<th>Feito</th>
            <th>Tarefa</th>
            <th>Ações</th>
            </tr>
        </tfoot>
    </table>
@stop

@section('js')
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
@stop