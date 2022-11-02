<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $sdt = $_POST['sdt'];

$string = '0943612567,0343567891,092827262';
$phones = explode(',', $string);
$vinaphone      = [];
$viettels   = [];
$mobile      = [];
foreach ($phones as $phone) {
    $checkPhone = substr($phone, 0, 3);
    //kiem tra vinaphone
    if ($checkPhone == '094') {
        $vinaphone[] = $phone;
    }
    //kiem tra vietels
    if ($checkPhone == '034') {
        $viettels[] = $phone;
    }
    //kiem tra mobiphone
    if ($checkPhone == '092') {
        $mobile[] = $phone;
    }
    var_dump($checkPhone);
}
echo '<pre>';
print_r($vinaphone);
echo 'Đây là số vinaphone';
echo '<hr>';
print_r($viettels);
echo 'Đây là số viettels';
echo '<hr>';
print_r($mobile);
echo 'Đây là số mobile';
echo '</pre>';
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
        <label for="">Nhập số điện thoại cần kiểm tra</label><br>
        <input type="text" name="sdt"><br><br>
        <input type="submit" value="Submit">


    </form>
</body>

</html>