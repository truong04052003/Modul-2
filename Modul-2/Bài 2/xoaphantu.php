<?php

$songuyen = [1,3,6,4,8,7,9,5];
//           0 1 2 3 4 5 6 7

$index = 6;
$somuonxoa = 9;
for ($i = 0 ;  $i   < count($songuyen) ;  $i++ )  { 
  if($songuyen[$i] == $somuonxoa){
    $somuonxoa = $i;
  }
}
unset($songuyen[$somuonxoa]);

echo '<pre>';
print_r($songuyen);
echo '</pre>';

echo "$somuonxoa : là phần tử muốn xóa khỏi mảng " ."<br>"; 
echo "vị trí" ." $index : là vị trí muốn xóa trong mảng";
