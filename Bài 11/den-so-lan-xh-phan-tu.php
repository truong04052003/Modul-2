<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $socantim = $_POST['socantim'];

$numbers = [2,3,5,7,9,10,16,25];
$count = 0;
foreach ($numbers as $key => $value) {
    if($value == $socantim) {
        $count ++;
    }
}
echo "Tìm thấy số ". $socantim ." xuất hiện ".$count ." lần";                                                               
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
<form method='post'>
        <label for="">Nhập số phần tử cần tìm</label><br>
        <input type="text" name="socantim"><br><br>
        <input type="submit" value="Submit">


    </form>
</body>
</html>