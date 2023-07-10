/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/cadastroUsusarios.js ***!
  \*******************************************/
$("#button").click(function (e) {
  console.log(e);
});
$(function () {
  $('form[name="formulario"]').submit(function (e) {
    e.preventDefault();
    $.ajax({
      url: "/criar/usuario",
      type: "POST",
      data: $(this).serialize(),
      dataType: "json",
      success: function success(res) {
        if (res.success === true) {
          window.location.href = "/usuarios";
          return;
        } else {
          console.log("erro");
        }
      }
    });
  });
});
/******/ })()
;