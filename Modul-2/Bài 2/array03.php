<?php


$tu_sach = [

    ["toán", "lý", "hóa"],
    ["văn", "sử", "địa"]
];
echo '<pre>';
print_r($tu_sach);
echo '</pre>';

//lay do dai
echo count($tu_sach);
echo '<br>';
//truy xuat 
// echo $tu_sach[''];
// echo '<br>';

//thay doi 

//xoa color

//in mang

//duyệt mảng bằng foreach
foreach ($tu_sach as $key => $books) {
    foreach ($books as $key => $book) {
        echo $book . '<br>';
    }
}
//duyệt mảng bằng for
for ($i = 0; $i < count($tu_sach); $i++) {
    for ($j = 0; $j < count($tu_sach[$i]); $j++) {
        echo '<br>' . $tu_sach[$i][$j];
    }
}



    
//lấy sử
// echo $tu_sach[1][1];
