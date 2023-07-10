@extends('layout')


<div class="d-flex flex-column p-3 gap-3 ">
    <h1 class="text-center">Tarefas</h1>
    <div class=" d-flex justify-content-center gap-2">
        <a class="text-light text-decoration-none" href="/usuarios">
            <button class="btn btn-primary ">
                usuarios
            </button>
        </a>
        <a class="text-light text-decoration-none" href="/tarefas">
            <button class="btn btn-primary">
                tarefas
            </button>
        </a>
    </div>
    <div class="d-flex flex-column gap-5 p-1 ">
        @foreach($tarefas as $tarefa)
        <a class="text-decoration-none text-dark" href="/tarefas/{{$tarefa->id}}">
            <div class="border border-dark bg-light p-1 rounded-2 d-flex justify-content-between">
                <p>{{substr($tarefa->descricao, 0, 10)}}....</p>
                @if($tarefa->status === 1)
                <p class="text-danger"><strong>Pendete</strong></p>
                @else
                <p class="text-success"><strong>Concluido</strong></p>
                @endif
            </div>
        </a>
        @endforeach
    </div>
</div>