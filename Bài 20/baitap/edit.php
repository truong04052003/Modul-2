<?php
include_once 'ketnoidb.php'; //$conn
// edit.php?id=3
$ID = $_REQUEST['id']; //3
// var_dump($MAHANG);die();
$sql = "SELECT * FROM `quanlydocgia` WHERE ID = $ID";
// var_dump($sql);die();
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
$row = $stmt->fetch();
// debug
// echo '<pre>';
// print_r( $row );
// echo '</pre>';

// xu ly khi gui du lieu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = $_REQUEST['Name'];
    $Address = $_REQUEST['Address'];
    $Phone = $_REQUEST['Phone'];

    $Image = $_FILES['Image']['name'];
    $tmp_img = $_FILES['Image']['tmp_name'];
    $div = explode('.', $Image);
    $file_ext = strtolower(end($div));
    $unique_image = $div[0] . time() . '.' . $file_ext;
    $path_uploads = "public/uploads/product/" . $unique_image;
    move_uploaded_file($tmp_img, $path_uploads);
    $Email = $_REQUEST['Email'];

    $sql = " UPDATE `quanlydocgia` SET 
            `Name` = '$Name',
            `Address` = '$Address',
            `Phone` = '$Phone',
            `Image` = '$Image',
            `Email` = '$Email'
        WHERE `quanlydocgia`.`ID` = $ID";
    // var_dump($sql);die();
    $conn->exec($sql);
    //chuyen huong 
    header("Location: listbaitap.php");
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
    <form action="" method="post" enctype="multipart/form-data">
    Name :<input type="text" name="Name" value="<?= $row->Name; ?>"> <br>
        Address: <input type="text" name="Address" value="<?= $row->Address; ?>"> <br>
        Phone: <input type="text" name="Phone" value="<?= $row->Phone; ?>"> <br>
        Image: <input type="file" name="Image" value="<?= $row->Image; ?>"> <br>
        Email: <input type="text" name="Email" value="<?= $row->Email; ?>"> <br>
        

        <label for="pwd">Hình ảnh sản phẩm</label>
        <p> <img src="<?php echo 'http://localhost/Modul-2/Bài%2020/baitap/public/uploads/product/' ?><?php echo $row->Image ?>" height="100" width="100"></p>
        <input type="submit" value="Cap nhat">
    </form>

</body>

</html>