<?php

session_start();

if($_POST['SubmitLeave'] == true ){
    session_destroy();
    header('Location: index.php'); exit();
}if(!isset($_SESSION['login']))
{  
    header('location: index.php');
}

?>

<html>
</head>
    <form action="" method = 'POST'> 
        <h1>Нажмите что-бы выйти</h1>
        <input type="submit" name = 'SubmitLeave' value = 'Выйти'>
    </form>
</html>
