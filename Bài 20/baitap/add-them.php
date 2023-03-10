<?php
include_once('ketnoidb.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //    echo '<pre>';
    //    print_r($_REQUEST);
    //    echo '</pre>';
    $Name = $_REQUEST['Name'];
    $Address = $_REQUEST['Address'];
    $Phone = $_REQUEST['Phone'];
    $Image = $_FILES['Image']['Name'];
        $tmp_img = $_FILES['Image']['tmp_name'];
        $div = explode('.',$Image);
        $file_ext = strtolower(end($div));
        $unique_image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/product/".$unique_image;
        move_uploaded_file($tmp_img,$path_uploads);
        $Email = $_REQUEST['Email'];

    $sql = "INSERT INTO `quanlydocgia`(`Name`, `Address`, `Phone`, `Image`,`Email`)
     VALUES ('$Name','$Address','$Phone' , '$unique_image','$Email')";
    $conn->exec($sql);
    //chuyển về trang danh sách 
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

    Name : <input type="text" name="Name"><br>
    Address : <input type="text" name="Address"><br>
    Phone : <input type="text" name="Phone"><br>
    Image : <input type="file" name="Image"><br>
     Email : <input type="text" name="Email"><br>
     <input type="submit" value="Thêm">
    </form>
    
</body>
</html>