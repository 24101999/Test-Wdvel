@extends('layout')

<div class="text-center d-flex h-100 flex-column justify-content-center">
    <h1>Editar Tarefa</h1>
    <h2 class="msg"></h2>
    <form action="/editar/tarefa/{{$id}}" method="post"
        class="d-flex flex-column justify-content-center align-middle p-5 gap-3">
        @csrf
        <textarea class="form-control" placeholder="{{$tarefas->descricao}}" id="floatingTextarea2"
            style="height: 100px" name="descricao"></textarea>
        <select class="form-select" name="usuario_id" id="">
            <option value="{{$tarefas->usuaroio_id}}}">selecione um valor</option>
            @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
            @endforeach
        </select>
        <select class="form-select" name="status">
            <option value="1">pendete</option>
            <option value="0">concluido</option>
        </select>
        <button class="btn btn-primary" id="bt" type="submit">cadastrar</button>
    </form>
</div>

<script type="text/javascript">
const selectVal = document.querySelectorAll(".form-select")
const textArea = document.querySelector(".form-control")
const msg = document.querySelector(".msg")
const button = document.querySelector('#bt')
const regex = /^[a-z 0-9 à-ú À-Ú ]+$/i;

button.addEventListener("click", (ev) => {
    selectVal.forEach((e) => {
        if (!e.value || !textArea.value) {
            msg.innerHTML = 'Campo vazio';
            ev.preventDefault()
            return;
        }
        if (!regex.test(textArea.value)) {
            msg.innerHTML = "Não pode usar caracter especial";
            return;
        } else {
            msg.innerHTML = ''
            window.location.href = '/tarefas'
        }
    })
})
</script>