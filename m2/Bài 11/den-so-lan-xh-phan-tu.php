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