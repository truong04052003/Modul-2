<?php

$numbers = [1, 9, 4.5, 6.6, 5.7, -4.5];
for($i = 0 ; $i < count($numbers) ; $i++) {
    $min = $i;
    for($k = $i + 1 ; $k < count($numbers); $k++) {
        if($numbers[$k] < $numbers[$min]){
            $min = $k;
        }
    }
    $temp = $numbers[$min];
    $numbers[$min] = $numbers[$i];
    $numbers[$i] = $temp;
}


echo '<pre>';
print_r($numbers);
echo '</pre>';

?>