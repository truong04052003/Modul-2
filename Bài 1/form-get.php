<?php

// echo ($_SERVER['REQUEST_METHOD']);
//kiểm tra tồn tai dữ liệu username hoặc password
if (isset($_GET['username']) || isset($_GET['password'])) {
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';

    //khai báo biến theo kiểu biến dữ liệu
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    //xuất ra 
    echo 'Ten dang nhap: ' . $username;
    echo '<br>';
    echo 'Mat khau la : ' . $password;
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
    <form action="" method="get">
        Username : <input type="text" name="username"> <br>
        Password : <input type="text" name="password"> <br>
        <input type="submit" value="login">


    </form>
</body>

</html>