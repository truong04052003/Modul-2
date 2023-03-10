<?php

function seachMin($num)
{

    $index = 0;
    $min = $num[0];
    for ($i = 1; $i < count($num); $i++) {
        if ($num[$i] < $min) {
            $min = $num[$i];
            $index += $i;
        }
    }
    return "Giá trị nhỏ nhất trong mảng là : " . $min . '<br>' . "nằm ở vị trí : " . $index;
}
$arr = [3, 7, 9, 12, 14, 15, 3, 1];
echo seachMin($arr);
