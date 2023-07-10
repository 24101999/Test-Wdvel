@extends('layout')

<div class="text-center d-flex h-100 flex-column justify-content-center">
    <h1>Cadastrar Tarefa</h1>
    <h2 class="msg"></h2>
    <form class="d-flex flex-column justify-content-center align-middle p-5 gap-3" name="tarefas">
        @csrf
        <textarea class="form-control" placeholder="Descrição" id="floatingTextarea2" style="height: 100px"
            name="descricao"></textarea>
        <select class="form-select" name="usuario_id" id="">
            <option value="{{$usuarios[0]->id}}">{{$usuarios[0]->nome}}</option>
            @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
            @endforeach
        </select>
        <select class="form-select" name="status">
            <option value="1">pendete</option>
        </select>
        <button class="btn btn-primary" id="bt" type="submit">cadastrar</button>
    </form>
</div>