const selectVal = document.querySelectorAll(".form-select");
const textArea = document.querySelector(".form-control");
const msg = document.querySelector(".msg");
const button = document.querySelector("#bt");
const regex = /^[a-z 0-9 à-ú À-Ú ]+$/i;
button
    ? button.addEventListener("click", (ev) => {
          selectVal.forEach((e) => {
              if (!textArea.value) {
                  ev.preventDefault();
                  msg.innerHTML = "Campo vazio";
                  return;
              }
              if (!regex.test(textArea.value)) {
                  ev.preventDefault();
                  msg.innerHTML = "Não pode usar caracter especial";
                  return;
              } else {
                  //   ev.preventDefault();
                  msg.innerHTML = "";
                  window.location.href = "/tarefas";
              }
          });
      })
    : "";

$(function () {
    $('form[name="tarefas"]').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/criar/tarefa",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: (res) => {
                if (res) {
                    window.location.href = "/tarefas";
                    return;
                } else {
                    console.log("erro");
                }
            },
        });
        return;
    });
});
