<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenlop = $_REQUEST['tenlop'];

        $pattern = '/^[CAP][0-9]{4,4}[GHIKLM]$/';
        if(preg_match($pattern , $tenlop)){
            echo "Tên lớp hợp lệ";
        }else {
            echo "Tên lớp không hợp lệ";
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
        <label for="fname">Nhập kiểm tra tên lớp học:</label><br>
        <input type="text" id="" name="tenlop"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>