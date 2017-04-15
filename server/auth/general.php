<?php

  $connection = mysqli_connect ("mysql.hostinger.fr", "u818352377_user", "0", "u818352377_name") or die ("Ошибка при попытке соединения с сервером");

  if (isset ($_POST['reg'])) {

      if (!empty ($_POST['login_value']) && !empty ($_POST['pass_value'])) { # если все поля заполнены

        $str_login = strlen ($_POST['login_value']);
        $str_pass  = strlen ($_POST['pass_value']);

        if ($str_login >= 6 && $str_pass >= 6) {

          $login    = $_POST['login_value'];
          $pass     = md5 ($_POST['pass_value']);

          $query    = mysqli_query ($connection, "SELECT `id` FROM `users` WHERE `login` = '$login'");
          $id_user  = mysqli_fetch_array ($query);

          if (!empty ($id_user["id"])) {
            echo "<div><a>Пользователь с таким именем уже существует.</div><a>";
          } else {
            echo "<div><a>Вы успешно зарегистрировались. Теперь зайдите в свой аккаунт, используя ваш логин и пароль.</div></a>";

            $query = mysqli_query ($connection, "INSERT INTO `users` (login, password) VALUES ('$login', '$pass')");
          }

        } else {
          echo "<div><a>Слишком короткий логин и/или пароль</a></div>";
        }

      } else {
        echo "<div><a>Заполните все поля!</a></div>";
      }
  }

  if (isset ($_POST['login'])) {

    $login            = $_POST['login_value'];
    $pass             = md5 ($_POST['pass_value']);

    $query            = mysqli_query ($connection, "SELECT `id` FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");

    $id_user          = mysqli_fetch_array ($query);

    if (!empty ($id_user["id"])) {
      echo "<div><a>Вы успешно авторизовались!</a></div><br>";
      echo "<script>document.cookie='login='+ '$login'; document.cookie = 'password='+'$pass'</script>";
    } else {
      echo "Неверные данные!";
    }

  }

?>
