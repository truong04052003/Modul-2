<?php


//number
$age = 18;

// string
$name = "Trần Văn Trường";

//float
$sothapphan = 10.456;

//integer
$songuyen  = 3456;

//boolean 

$gender = true;

//mảng
// $mang = array("Sh", "dream", "sirius");
$sothich = ['keo' , 'trasua'];



//khai báo hằng

// const PI = 3.14;
// define('PI2' , 3.14);

// echo $PI2;



/*
echo : string , number 
print : string , number 
print_r : array , object
var_dump : all, kiểu dữ liệu + giá trị 

*/

echo $name; 
echo $age;
print $name;
print $age;
var_dump($gender);
var_dump($name);
print_r($sothich);

echo '<pre>';
print_r($sothich);     // in mảng 
echo '</pre>';
