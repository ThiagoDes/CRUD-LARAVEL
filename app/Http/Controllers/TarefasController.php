<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tarefa;

class TarefasController extends Controller{

    public function list() {

        $list = Tarefa::all();
        return view('tarefas/list',[
          'list' => $list  
        ]);

    }

    public function add(){

      return view('tarefas.add');
    }
  
    public function addAction(Request $request) {

      $request->validate([
          'strTitulo' => [ 'required', 'String']
      ]);
    
        $strTitulo = $request->input('strTitulo');

        $tarefa = new Tarefa();
        $tarefa->titulo = $strTitulo;
        $tarefa->save();
  
        return redirect()->route('tarefas.list');
    }
  
    public function edit($intId){

      $data = Tarefa::find($intId);
  
      if ($data) {
        return view('tarefas.edit', [
          'data' => $data
        ]);
      } else {
        return redirect()->route('tarefas.list');
      }
  
      
    }
  
    public function editAction(Request $request, $intId){

      $request->validate([
        'strTitulo' => [ 'required', 'String']
      ]);
      
        $strTitulo = $request->input('strTitulo');

        $tarefa = Tarefa::find($intId);
        $tarefa->titulo = $strTitulo;
        $tarefa->save(); 

        return redirect()->route('tarefas.list');
  
    }
  
    public function del($intId){
  
      Tarefa::find($intId)->delete();
  
      return redirect()->route('tarefas.list');
    }
  
    public function done($intId){
  
      $tarefa = Tarefa::find($intId);
      if($tarefa){
      $tarefa->resolvido = 1 - $tarefa->resolvido;
      $tarefa->save();
    }
  
      return redirect()->route('tarefas.list');
    }
}
