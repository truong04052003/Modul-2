<?php


$numbers = [1,4,6,8,9,10];
$find = 8;
foreach ($numbers as $key => $value) {
    if($value == $find){
        echo $key;
    }
}

?>