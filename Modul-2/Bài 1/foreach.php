<?php
//mảng 1 chiều
$book = ['Van', 'Su', 'Đia'];
//         0       1       2

$book = [
    0 => 'Van',
    1 => 'Su',
    2 => 'Đia'
];

echo $book[1];
echo '<br>';


//======================================================================================
//mảng liên kết
$info  = [
    'ten' => 'Tran Van Truong',
    'Ngaysinh' => '04/05/2003',
    'diachi' => 'Quang Tri'
];

    
//in mảng liên kết 
echo $info['ten'];

echo '<pre>';
print_r($book);
echo '</pre>';

//==========================================================================

foreach ($book as $key => $value) {
    //key : 0 1 2 
    //value : van su dia 
    echo $value . '<br>';
}


foreach ($info as $key => $value) {
    //key : ten ngay sinh
    // value : tran van truong .....
    echo $value . '<br>';
}


// foreach ($info as $key => $value) {
//     echo $value . '<br>';

// }
// // endforeach;
