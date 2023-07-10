@extends('layout')

<a class="text-light text-decoration-none" href="/">
    <button class="btn btn-primary m-1">
        Home
    </button>
</a>

<div class="d-flex h-100 align-items-center flex-column justify-content-center">

    <h1 class="text-center"><strong>Informações da tarefa</strong></h1>
    <div class="border border-1 border-dark p-5 rounded">
        @if($Tarefas->status === 1)
        <p class="text-danger"><strong>Pendete</strong></p>
        @else
        <p class="text-success"><strong>Concluido</strong></p>
        @endif
        <p>
            <strong>Descricao</strong>: {{$Tarefas->descricao }}
        </p>
        <p>
            <strong>Usuario</strong>: {{$Tarefas->usuario->nome}}
        </p>
        <p>
            <strong>Data de criaçao</strong>:
            {{$date1 = DateTime::createFromFormat('Y-m-d H:i:s', $Tarefas->cadastrado)->format('d/m/Y')}}
        </p>
    </div>
</div>