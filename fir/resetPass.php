<?php
include("connect.php");

session_start();

if(!empty($_POST['searchLogin']) && !empty($_POST['NewPass'])) {
    $search = $_POST['searchLogin'];
    $password = md5($_POST['NewPass']);
    
    if(!empty($user)) {
        $query = "UPDATE `reg_info` SET `password` = '$password' WHERE `login` = '$search'";
        mysqli_query($link, $query);
        echo 'Пароль изменен успешно';
    }else{
        echo 'Логин не найден';
    }
}


?>

<html>
<form method="post">
<input type="text" name="searchLogin" placeholder="Введите логин, для поиска пользователя">
<input type="password" name= 'NewPass'  placeholder="введите новый пароль">
<input type="submit" name="reset" value="сброс" >
</form>
</html>