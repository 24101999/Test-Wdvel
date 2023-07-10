@extends('layout')

<form class="p-5 text-center" name="edit" method="post" action="/editar/usuario/{{$id}}">
    <h1 class="pb-2">Editar Ususario</h1>
    @csrf
    <h2 class="msg"></h2>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="Nome do usuario">
        <label for="floatingInput">nome</label>
    </div>
    <button type="submit" id="button" class="btn btn-primary">submit</button>
</form>
<script>
const button = document.querySelector("#button")
const input = document.querySelector(".form-control")
const msg = document.querySelector(".msg")
const regex = /^[a-z 0-9 à-ú À-Ú ]+$/i;

button.addEventListener("click", (e) => {

    if (!input.value) {
        e.preventDefault()
        input.value = 'campo vazio'
        msg.innerHTML = 'campo vaizo'
    }
    if (!regex.test(input.value)) {
        msg.innerHTML = "Não pode usar caracter especial";
        return;
    } else {
        msg.innerHTML = ''
        window.localStorage.href = '/usuarios'
    }
})
</script>