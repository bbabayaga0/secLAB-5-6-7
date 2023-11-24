<?php

include('connect.php');


session_start();



if(!empty($_POST['login']) and !empty($_POST['password'])){
  $login = $_POST['login'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM `reg_info` WHERE login = '$login' AND password = '$password'";

  $res = mysqli_query($link, $query);
  $user = mysqli_fetch_assoc($res);

  if(!empty($user)){
    header('Location: page2.php');
  }else{
    echo('Ваши данные не те, топайте лесом');
  }

  session_destroy();
}
?>

<html>
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="expires" content="0">
</head>
<!-- Форма на вход  -->
<form action="" method = 'POST'>
  <input type="text" name = 'login'>
  <input type="password" name = 'password'>
  <input type="submit" value = 'Войти'>
  <br><br>
  <a href="/reg.php">Регистрация</a>
  <a href="/resetPass.php">Сброс пароля</a>
</form>
</html>