<?php

// checkin 11:
// dựa theo cú pháp switch case
// viết chương trình kiểm tra biến month
// nếu month = 1: in ra câu 31 ngày
// nếu month = 2: in ra câu 28 ngày
// mặc định: in ra câu 30 ngày

$month = 3;
switch ($month) {
    case ($month == 1):
       echo '31 ngày';
        break;
    case ($month == 2):
        echo '28 ngày';
        break;
    
    default:
        echo ' 30 ngày';
        break;
}



?>