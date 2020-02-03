@section('title', 'Adicionar de Tarefas')

@section('content')

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Adicionar de Tarefas.</p>
	@if($errors->any())
	@alert
       @foreach($errors->all() as $error)
         {{ $error }}<br/>
       @endforeach
	@endalert
@endif
    <form method="POST">
	@csrf
	<form>
  <div class="form-group">
	<label>Título:<br>
		<input type="text" name="strTitulo"> 
	</label>

	<input type="submit" value="Salvar"/>
	</div>
</form>
@stop
