<?php

/*

\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}

*/


$string = '+84.555.666.777';
$pattern = '/\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';

if (preg_match($pattern, $string)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}


/*
    preg_match_all()
    */
$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
echo ('<pre>');
preg_match_all($pattern, $subject, $matches);
print_r($matches);
echo ('</pre>');


//preg_split()
$ip = '197.196.0.1';
//tách chuỗi thành mảng 
$arr = explode(".", $ip);
// echo "<pre>";
// print_r($arr);  
// echo "</pre>";

$pattern = '/\./';
$iparr = preg_split($pattern, $ip);
echo "<pre>";
print_r($iparr);
echo "</pre>";
