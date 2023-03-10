<?php

//kiểm tra người dùng đã gửi hay chưa 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $username = $_POST['username'];
    $password =  $_POST['password'];

    //xuất ra 
    echo 'Ten dang nhap: ' .$username;
    echo '<br>';
    echo 'Mat khau la : ' .$password;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username : <input type="text" name="username"> <br>
        Password  : <input type="text" name="password"> <br>
        <input type="submit" value="login">
 

    </form>
</body>
</html>