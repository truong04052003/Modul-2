<?php
// checkin 7:
// dùng checkin 6: in ra câu 'bạn phải về nhà' nếu như KO thỏa mãn điều kiện trên

$money = true;
$quan_open = false;
$cho_no = true;
if($quan_open){
    if($money || $cho_no)
    echo 'bạn được nhậu';
}else {
    echo 'bạn phải về nhà';
}





?>