<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sdt = $_REQUEST['sdt'];

    $pattern = '/^\([0-9]{2,2}\)\-\([0-9]{10,10}\)$/';
    if (preg_match($pattern, $sdt)) {
        echo "Hợp lệ";
    } else {
        echo "Không hợp lệ";
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
        <label for="fname">Nhập số điện thoại:</label><br>
        <input type="text" id="" name="sdt"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>