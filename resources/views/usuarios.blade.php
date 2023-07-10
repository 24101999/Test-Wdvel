@extends('layout')
<a class="text-light text-decoration-none" href="/">
    <button class="btn btn-primary m-1">
        Home
    </button>
</a>
<div class="d-flex flex-column p-3 gap-3">
    <a class="text-light text-decoration-none text-center" href="/criarUsuario">
        <button class="btn btn-success">Criar Usuario</button>
    </a>
    @foreach($usuarios as $usuario)
    <div class="d-flex justify-content-between border border-1 p-2 rounded">
        <p>{{$usuario->nome}}</p>
        <div class="">
            <a href="/editarUsuario/{{$usuario->id}}"><button class="btn btn-primary">editar</button></a>
            <a href="/deletar/usuario/{{$usuario->id}}"><button class="btn btn-danger">excluir</button></a>
        </div>
    </div>

    @endforeach
</div>