<?php

session_start();


session_destroy();

if($_POST['SubmitLeave'] == true ){
    header('Location: index.php'); exit();
}

?>

<html>
</head>
    <form action="" method = 'POST'> 
        <h1>Нажмите что-бы выйти</h1>
        <input type="submit" name = 'SubmitLeave' value = 'Выйти'>
    </form>
</html>