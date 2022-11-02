<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sdt = $_POST['sdt'];

    $phones = explode(',', $sdt);
    $vinaphone      = [];
    $viettel   = [];
    $mobile      = [];
    foreach ($phones as $phone) {
        $checkPhone = substr($phone, 0, 3);
        //kiem tra vinaphone
        if ($checkPhone == '094' || $checkPhone == '084' || $checkPhone == '082' || $checkPhone == '085') {

            $vinaphone = $phone;
            echo 'Đây là số vinaphone : ';
            echo $vinaphone  ;
            //kiem tra vietels
        } else if ($checkPhone == '034' || $checkPhone == '032' || $checkPhone == '033' || $checkPhone == '039') {
            $viettel = $phone;
            echo 'Đây là số viettel :' ;
            echo $viettel ;

            //kiem tra mobiphone
        } else if ($checkPhone == '092' || $checkPhone == '070' || $checkPhone == '079' || $checkPhone == '077') {
            $mobile = $phone;
            echo 'Đây là số mobile : ' ;
            echo $mobile  ;
        }

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
    <form method='post'>
        <label for="">Nhập số điện thoại cần kiểm tra</label><br>
        <input type="number" minlength="" maxlength="10" name="sdt"><br><br>
        <input type="submit" value="Submit">


    </form>
</body>

</html>