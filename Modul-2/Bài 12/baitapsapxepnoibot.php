<?php
$numbers = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

for($i = 0; $i < count($numbers); $i++) {
    for($k = count($numbers) - 1 ; $k > 0; $k-- ){
          //nếu phần tử hiện tại nhỏ hơn phần tử đứng sau thì hoán đổi
          //         12   <   14
          if($numbers[$k] < $numbers[$k - 1] ){
            //hoán đổi
            $temp = $numbers[$k-1];  //14
            $numbers[$k-1] = $numbers[$k]; //12
            $numbers[$k] = $temp; //14
          }
    }
}
echo '<pre>';
print_r($numbers);
echo '</pre>';
