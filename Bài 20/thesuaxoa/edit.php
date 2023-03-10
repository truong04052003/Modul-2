<?php
    include_once 'ketnoidatabase.php';//$conn
    // edit.php?id=3
    $MAHANG = $_REQUEST['id'];//3
    // var_dump($MAHANG);die();
    $sql = "SELECT * FROM `c10_mat_hang` WHERE MAHANG = $MAHANG";
    // var_dump($sql);die();
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
    $row = $stmt->fetch();
    // debug
    // echo '<pre>';
    // print_r( $row );
    // echo '</pre>';

    // xu ly khi gui du lieu
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $TENHANG = $_REQUEST['TENHANG'];
        $MACONGTY = $_REQUEST['MACONGTY'];    
        $sql = " UPDATE `c10_mat_hang` SET 
            `TENHANG` = '$TENHANG',
            `MACONGTY` = '$MACONGTY'
        WHERE `c10_mat_hang`.`MAHANG` = $MAHANG";
        // var_dump($sql);die();
        $conn->exec($sql);
        //chuyen huong 
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

        TENHANG : <input type="text" value="<?=$row->TENHANG?>" name="TENHANG"><br>
        MACONGTY : <input type="text" value="<?=$row->MACONGTY?>" name="MACONGTY"><br>
        <input type="submit" value="Sửa">
    </form>
    
</body>
</html>