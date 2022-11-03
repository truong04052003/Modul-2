<?php

$info =[
    'name' => 'IphoneX',
    'price' => '20000',
    'color' => 'black'
];

//lấy độ dài 
echo count($info);
echo '<br>';

//truy xuất IphoneX
echo $info['name'];
echo '<br>';

//thay đổi

$info['name'] = 'IPhone ProMax';

//xóa
unset ($info['color']);

//in
echo '<pre>';
print_r($info);
echo '</pre>';

//duyệt mảng bằng foreach
foreach ($info as $key => $value) {
    //$key = 0 1 2
    //$value = Iphone Promax 20000
    echo $value . '<br>';
}
 
?>  