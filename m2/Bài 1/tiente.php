<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sotien = $_POST['sotien'];
    $donvi = $_POST['donvi'];
    if ($donvi == 'USD'){
        echo $ketqua = $sotien * 23000 ." "."VNĐ";

    }else if ($donvi == 'VNĐ'){
        echo  $ketqua = $sotien / 23000 ." "."USD";
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
    <form action="" method="post">
        <label for="">Nhập số tiền :</label><br>
        <input type="text" name="sotien"><br> <br>
        <select name="donvi"> 
            <option value="VNĐ">Chuyển từ VNĐ sang USD </option>
            <option value="USD">Chuyen tu USD sang VNĐ</option>
        </select>
        <input type="submit" value="change">
    </form>
</body>

</html>