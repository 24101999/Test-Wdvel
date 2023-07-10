<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarefaRequest;
use App\Models\Tarefa;
use App\Models\Usuario;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

date_default_timezone_set('America/Sao_Paulo');
class TarefasController extends Controller
{
    //pegar todas as tarefas
    public function getTarefas()
    {
        $tarefas = Tarefa::all();

        return view('tarefas', ['tarefas' => $tarefas]);
    }
    //pegar tarefa espesifica pelo id
    public function getTarefasUnica(Tarefa $tarefa)
    {
        $Tarefas = $tarefa->load('usuario');

        return view('tarefaUnica', ['Tarefas' => $Tarefas]);
    }
    //criar tarefas
    public function createTarefas(TarefaRequest  $request)
    {
        $Novatarefa = Usuario::find($request->usuario_id);

        $Novatarefa->tarefas()->create([
            'descricao' => $request->descricao,
            'status' => $request->status,
            'cadastrado' => date('Y-m-d H:i'),

        ]);
    } //editar tarefas
    public function updateTarefas(Request $request, $id)
    {
        $tarefas = Tarefa::find($id);

        $tarefas->usuario_id  = $request->usuario_id;
        $tarefas->descricao = $request->descricao;
        $tarefas->status = $request->status;
        $tarefas->alterado = date('Y-m-d H:i');

        $tarefas->save();
        return redirect('/tarefas');
    }
    //deletar tarefas
    public function destroyTarefas($id)
    {
        Tarefa::find($id)->delete();

        return redirect('/tarefas');
    }
}
