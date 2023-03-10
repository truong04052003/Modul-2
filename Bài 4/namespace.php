<?php


include_once 'DongHa/tam.php';
include_once 'GioLinh/tam.php';

$tam_1 = new GioLinh\Tam();
$tam_2 = new DongHa\Tam();

echo "<pre>";
print_r($tam_1);
echo "</pre>";

echo "<pre>";
print_r($tam_2);
echo "</pre>";
?>