/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/cadastroTarefas.js ***!
  \*****************************************/
var selectVal = document.querySelectorAll(".form-select");
var textArea = document.querySelector(".form-control");
var msg = document.querySelector(".msg");
var button = document.querySelector("#bt");
var regex = /^[a-z 0-9 à-ú À-Ú ]+$/i;
button ? button.addEventListener("click", function (ev) {
  ev.preventDefault();
  selectVal.forEach(function (e) {
    if (!textArea.value) {
      msg.innerHTML = "Campo vazio";
      return;
    }
    if (!regex.test(textArea.value)) {
      msg.innerHTML = "Não pode usar caracter especial";
      return;
    } else {
      msg.innerHTML = "";
      window.location.href = "/tarefas";
    }
  });
}) : "";
$(function () {
  $('form[name="tarefas"]').submit(function (e) {
    e.preventDefault();
    $.ajax({
      url: "/criar/tarefa",
      type: "POST",
      data: $(this).serialize(),
      dataType: "json",
      success: function success(res) {
        if (res) {
          window.location.href = "/tarefas";
          return;
        } else {
          console.log("erro");
        }
      }
    });
    return;
  });
});
/******/ })()
;