<?php


include_once 'DongHa/tam.php';
include_once 'GioLinh/tam.php';

use DongHa\Tam;
use GioLinh\Tam as TamGioLinh;

$tam = new Tam();
$tam2 = new TamGioLinh;

echo '<pre>';
print_r($tam);

echo '<pre>';
print_r($tam2);
// die();


?>