<?php

//toi là "sieu nhan"
//Teacher's Day
$string = 'Toi là "Sieu nhan"';
echo $string;

$string = "Teacher's Day";
echo $string;

$name = 'nguyen van a';
//toi ten là $name 

echo "toi ten là $name";
echo 'toi ten là ' . $name;


$ip = '197.196.0.1';
//tách chuỗi thành mảng 

$arr = explode(".", $ip);
echo "<pre>";
print_r($arr);
echo "</pre>";


/*
    Cac ham xu ly chuoi:
    Tim kiem va xu ly cac bai tap sau:
    1. Chuyen chuoi Toi,yeu,lap,trinh sang mang
    ['Toi','yeu','lap',trinh]
    - Goi y: Tach chuoi thanh mang PHP

    2. Chuyen mang ['Toi','yeu','lap',trinh] sang chuoi Toi yeu lap trinh
    - Goi y: Chuyen mang thanh chuoi PHP

    3. Tu chuoi Toi yeu lap trinh thay the bang Toi yeu CodeGym
    - Goi y: 
    4. Tu chuoi Toi yeu CodeGym, kiem tra ky tu CodeGym co nam trong chuoi hay khong ?
    - Goi y: 
    */

//bài 1
$chuyendoi = 'Toi,yeu,lap,trinh';
$arr = explode(",", $chuyendoi);
echo "<pre>";
print_r($arr);
echo "</pre>";

//bài 2
$arr =['Toi','yeu','lap','trinh'] ;
$chuoi = implode( ' ', $arr);
echo $chuoi;
echo '<br>';

//bài 3
$chuoi = 'Toi yeu lap trinh';
echo str_replace('lap trinh ','CodeGym','Toi yeu lap trinh');


//bài 4 



