<?php

$book = ['van', 'su' , 'đia'];
//         0      1       2

$book = [
    0 => 'van',
    1 => 'su',
    2 => 'đia'
];
//lấy độ dài

echo count($book);

//===================================

//truy xuất
echo $book[0];
 
//===================================

//thay đổi 
$book[0]= 'văn học';
 
//=====================================

//xóa
// unset ($book[0]);

//=====================================

//in

echo '<pre>';
print_r($book);
echo '</pre>';

//duyệt mảng bằng foreach
foreach ($book as $key => $value) {
    //$key = 0 1 2
    //$valua = văn su dia
    echo $value . '<br>';
}
 

//duyệt mảng bằng for
for ($i=0; $i < count($book); $i++) { 
    echo $book[$i] .'<br>';
}
?>