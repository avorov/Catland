

let isOnline = false; // Авторизован ли пользователь

setInterval (function () {

  function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  };

  isOnline?
    document.getElementById ('forms.auth').style.display = 'none':
      document.getElementById ('forms.auth').style.display = 'block';

  isOnline = Boolean (getCookie("login"));
}, 1);


document.getElementById ('lookat').addEventListener ('click', function (e) {
  let $ = document.getElementById ('pass_value');

  $.type == 'password'?
    $.type = 'text':
      $.type = 'password';
});
