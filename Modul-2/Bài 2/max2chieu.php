<?php

function seachMax($num){

    $index = 0;
    $index1 = 0;
    $max = $num[0][0];
    for ($i = 0; $i < count($num); $i++) {
        for ($j = 0; $j < count($num[$i]); $j++) {
            if ($num[$i][$j] > $max) {
                $max = $num[$i][$j];
                $index = $i;
                $index1 = $j;
            }
        }
    }
    return  " max : $max  <br> nằm ở vị trí: num[$index][$index1]";
}
$arr = [
    [1, 3, 4, 3, 6, 7, 5],
    [4, 5, 3, 5, 6, 12, 1]
];
echo seachMax($arr);
