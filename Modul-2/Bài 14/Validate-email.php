<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gmail = $_REQUEST['gmail'];


    $pattern = '/^[A-Za-z0-9]+\@[A-Za-z0-9]+\.[A-Za-z0-9]{3,3}$/';
    if (preg_match($pattern, $gmail)) {
        echo 'Khớp';
    } else {
        echo 'Không khớp';
    }
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
    <form method="post">
        <label for="fname">Nhập Gmail:</label><br>
        <input type="text" id="" name="gmail"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>