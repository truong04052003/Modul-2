<?php


$numbers = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
for ($i = 0; $i < count($numbers); $i++) {
    $k = $i - 1; //0 => $numbers[$k] = 5 ;
    $temp = $numbers[$i]; //-4
    while ($numbers[$k] < $temp && $k > 0) {
        $numbers[$k + 1] = $numbers[$k];
        $k--;
    }
    $numbers[$k + 1] = $temp;
}
echo '<pre>';
print_r($numbers);
echo '</pre>';
?>
