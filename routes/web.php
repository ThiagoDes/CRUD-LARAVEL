<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/tarefas')->group(function(){

	Route::get('/', 'TarefasController@list')->name('tarefas.list');//Listagem de Tarefas

	Route::get('add', 'TarefasController@add')->name('tarefas.add');//Tela de Adição de novas tarefas
	Route::post('add', 'TarefasController@addAction');//Ação de Adição de novas tarefas

	Route::get('edit/{intId}', 'TarefasController@edit')->name('tarefas.edit');//Tela de Edição de  tarefa
	Route::post('edit/{intId}', 'TarefasController@editAction');//Ação de Edição de  tarefa

	Route::get('delete/{intId}', 'TarefasController@del')->name('tarefas.del');//Ação de Exclusão de tarefa

	Route::get('marcar/{intId}', 'TarefasController@done')->name('tarefas.done');//Ação de marca resolvido ou não	
});