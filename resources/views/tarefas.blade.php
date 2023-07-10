@extends("layout")

<a class="text-light text-decoration-none" href="/">
    <button class="btn btn-primary m-1">
        Home
    </button>
</a>
<div class="d-flex flex-column p-3 gap-3 ">
    <a class="text-light text-decoration-none text-center" href="/criarTarefa">
        <button class="btn btn-success">Criar Tarefa</button>
    </a>
    @foreach($tarefas as $tarefa)
    <div class="d-flex justify-content-between border border-1 p-2 rounded">
        <p>{{$tarefa->descricao}}</p>
        <div class="">
            <a href="/editarTarefa/{{$tarefa->id}}"><button class="btn btn-primary">editar</button></a>
            <a href="/deletar/tarefa/{{$tarefa->id}}"><button class="btn btn-danger">excluir</button></a>
        </div>
    </div>

    @endforeach
</div>