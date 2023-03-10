<?php

$A = [8, 6, 34, 22, 40, 5, 11, 23, 44, 18];

for ($i = 1; $i < count($A); $i++) {
  $k = $i - 1; //0 => $A[$k] = 8 ;
  $temp = $A[$i]; //6
  while ($temp < $A[$k] && $k > 0) {
    $A[$k + 1] = $A[$k];

    $k--;
  }
  $A[$k + 1] = $temp;
}

echo '<pre>';
print_r($A);
echo '</pre>';
