<?php


$numbers = [2,3,5,7,9,10,16,25];
$find = 9;
$count = 0;
foreach ($numbers as $key => $value) {
    if($value == $find) {
        $count ++;
    }
}
echo "Tìm thấy số ". $find ." xuất hiện ".$count ." lần";                                                               

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
    
</body>
</html>