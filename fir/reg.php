<?php

include("connect.php");

session_start();

if(!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['email'])){
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $SubmitPassword = md5($_POST['SubmitPassword']);
    $mail = $_POST['email'];
  
    $query = "INSERT INTO `reg_info` SET login = '$login', password = '$password', mail = '$mail' ";
  
    $res = mysqli_query($link, $query);


    function checkPassword($password, $SubmitPassword) {
        $error = '';
        if ($password === $SubmitPassword) {
            header("Location: page2.php");
            exit();
        } else if (strlen($password) < 8) {
            $error = "Пароль должен быть не менее 8 символов.";
        } else if (ctype_digit($password)) {
            $error = "Пароль не может быть только из цифр.";
        } else if ($password == $SubmitPassword) {
            $error = 'Пароли не совпадают';
        }
        return $error;
        }
        $error = checkPassword($_POST['password'], $_POST['submitPassword']);
        echo $error;
            checkPassword($_POST['password'],$_POST['Submitpassword']);
        }


    session_destroy();
?>

<html>
  <meta charset="UTF-8">
    <form method = 'POST'>
    <input type="text" name = 'login' placeholder = 'тут логин'>
    <input type="password" name = 'password' placeholder = 'тут пароль' required>
    <input type="password" name = 'SubmitPassword' placeholder = 'Подтвердите пароль' required>
    <input type="email" name = 'email' placeholder = 'тут email.ru'>
        <br><br>
    <input type="submit" name = 'regSub' value = 'зарегистрироваться'>
</form>
</hmtl>