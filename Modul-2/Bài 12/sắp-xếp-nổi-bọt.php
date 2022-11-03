<?php

$A = [8 , 6 , 34 , 22 , 40 , 5 , 11 , 23 , 44 , 18 ];
  //  0   1    2    3    4    5   6   7     8    9

for ($i = 0; $i < count($A); $i++){
    for ($k = count($A)-1 ; $k > 0; $k--){
        //nếu phần tử hiện tại nhỏ hơn phần tử đứng sau thì hoán đổi
          // 18   <   44
        if($A[$k] < $A[$k-1]){
            //hoán đổi
            $temp = $A[$k-1];  //44
            $A[$k-1] = $A[$k]; //8
            $A[$k] = $temp; //44
        }
    }
}
echo '<pre>';
print_r($A);
echo '</pre>';
?>
