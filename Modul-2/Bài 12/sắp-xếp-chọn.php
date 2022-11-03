<?php

$A = [8 , 6 , 34 , 22 , 40 , 5 , 11 , 23 , 44 , 18 ];
  //  0   1    2    3    4    5   6   7     8    9

for($i = 0 ; $i < count($A); $i++) {
    $min = $i;
    for($k = $i + 1 ; $k < count($A) ; $k++) {
        if($A[$k] < $A[$min]){
            $min = $k;
        }
    }
    $temp = $A[$min];
    $A[$min] =  $A[$i];
    $A[$i] = $temp;
    
}
echo '<pre>';
print_r($A);
echo '</pre>';

?>