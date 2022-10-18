<?php
// checkin 6:
// cho money = true
// cho quan_open = true
// cho cho_no = true
// viết chương trình kiểm tra
// nếu quán mở và thỏa mãn một trong 2 điều kiện sau
// có tiền hoặc cho nợ
// thì in ra câu thông báo: bạn được nhậu
// gợi ý: dùng dấu () để nhóm điều kiện

$money = true;
$quan_open = true;
$cho_no = true;
if($quan_open){
    if($money || $cho_no)
    echo 'bạn được nhậu';
}else {
    echo 'bạn không được nhậu';
}

?>