@extends('layout')

<form class="p-5 text-center" name="formulario">
    <h1 class="pb-2">Cadastrar Usuario</h1>
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
            msg.innerHTML = 'campo vaizo'
            return
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