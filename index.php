<?php
  session_start ();
?>

<!DOCTYPE html>
<meta charset = 'utf-8'>

<html>

  <head>
    <script defer src = 'scripts/auth.js'></script>
    <div id = 'forms.auth'>

      <form method = 'post'>
        <input id = 'login_value' name = 'login_value' maxlength = '32' placeholder = 'Никнейм' type = 'text'>
        <br>
        Длинна вашего логина должна составлять от 6 до 32 символов.
        <br>
        <input id = 'pass_value' name = 'pass_value' maxlength = '32' placeholder = 'Пароль' type = 'password'>
        <img id = 'lookat' src = 'https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-eye-24.png'>
        <br>
        Придумайте сложний пароль длинной от 6 до 32 символов.
        <br>
        <input type = 'submit' name = 'login' id = 'login' value = ' Вход'>
        <input type = 'submit' name = 'reg' id = 'reg' value = 'Регистрация'>
      </form>

    </div>
  </head>

  <?php
    require('server/auth/general.php');

  ?>

  <body>
  </body>

</html>
