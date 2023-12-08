<?php

include('connect.php');


if(!empty($_POST['login']) and !empty($_POST['password'])){
  $login = $_POST['login'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM `reg_info` WHERE login = '$login' AND password = '$password'";

  $res = mysqli_query($link, $query);
  $user = mysqli_fetch_assoc($res);



  if(!empty($user)){
    session_start();
    $_SESSION['login'] = $_POST['login'];
    header('Location: page2.php');
    exit();
  }else{
    echo('Ваши данные не те, топайте лесом');
  }


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
