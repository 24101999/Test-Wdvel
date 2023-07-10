<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\UsuariosController;
use App\Models\Tarefa;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

//Rota Pagina Principal
Route::get('/', [HomeController::class, 'index']);
//Rota Pagina Principal

//Rotas de Usuarios
//Rota só com formularios
Route::match(['get', 'post'], '/criarUsuario', function () {
    return view('cadastroUsuario');
});
Route::match(['get', 'post'], '/editarUsuario/{id}', function ($id) {

    return view('editarUsuario', ['id' => $id]);
});
//Rota só com formularios

//Rota só com Controller
Route::get('/usuarios', [UsuariosController::class, 'getUsuarios']);
Route::match(['get', 'post'], '/criar/usuario', [UsuariosController::class, 'createUsuarios']);
Route::match(['get', 'post'], '/editar/usuario/{id}', [UsuariosController::class, 'updateUsuarios']);
Route::match(['get', 'delete'], '/deletar/usuario/{id}', [UsuariosController::class, 'destroyUsuarios']);
//Rota só com Controller
//Rotas de Usuarios

//Rotas de Tarefas
//Rota só com formularios
Route::match(['get', 'post'], '/criarTarefa', function () {

    $usuarios = Usuario::all();

    return view('cadastroTarefas', ["usuarios" => $usuarios]);
});
Route::match(['get', 'post'], '/editarTarefa/{id}', function ($id) {
    $usuarios = Usuario::all();
    $tarefas = Tarefa::find($id);

    return view('editarTarefa', ['id' => $id, "usuarios" => $usuarios, 'tarefas' => $tarefas]);
});
//Rota só com formularios

//Rota só com controller
Route::get('/tarefas', [TarefasController::class, 'getTarefas']);
Route::get('/tarefas/{tarefa}', [TarefasController::class, 'getTarefasUnica']);
Route::match(['get', 'post'], '/criar/tarefa', [TarefasController::class, 'createTarefas']);
Route::match(['get', 'post'], '/editar/tarefa/{id}', [TarefasController::class, 'updateTarefas']);
Route::match(['get', 'delete'], '/deletar/tarefa/{id}', [TarefasController::class, 'destroyTarefas']);
//Rota só com controller
//Rotas de Tarefas