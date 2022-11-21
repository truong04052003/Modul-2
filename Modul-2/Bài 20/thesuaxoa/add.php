<?php
include_once 'ketnoidatabase.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //    echo '<pre>';
    //    print_r($_REQUEST);
    //    echo '</pre>';
    $TENHANG = $_REQUEST['TENHANG'];
    $MACONGTY = $_REQUEST['MACONGTY'];
    $sql = "INSERT INTO c10_mat_hang
    (TENHANG, MACONGTY)
    VALUE('$TENHANG',$MACONGTY)";
    // echo $sql;
    $conn->exec($sql);
    //chuyển về trang danh sách 
    header("Location: list.php");

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

        TENHANG : <input type="text" name="TENHANG"><br>
        MACONGTY : <input type="text" name="MACONGTY"><br>
        <input type="submit" value="Thêm">
    </form>
    
</body>
</html>