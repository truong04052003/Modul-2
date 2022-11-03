<?php
/*

isset : kiểm tra sự tồn tại của biến hoặc chỉ số trong mảng 
input : 1 biến , mảng , chỉ số mảng 
output : boolean


*/
var_dump(isset($name));


$info = [
    'name' => 'nguyen van a'
];
var_dump(isset($info['name'])); // true

var_dump(isset($info['price'])); // true







?>