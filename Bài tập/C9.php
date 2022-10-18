<?php

// Checkin 12:
// Dùng switch case
// khai báo biến day bằng 1 giá trị bất kỳ từ 2 -> 7
// viết chương trình kiểm tra
// nếu day bằng 2 hoặc 3 hoặc 4 hoặc 5 hoặc 6 thì in ra câu đi làm
// nếu day bằng 7 thì in ra câu: sinh hoạt CLB
// trường hợp còn lại in ra câu: relax
// Gợi ý:
// hoặc 2 hoặc 3 hoặc 4
// case 2:
// case 3:
// case 4:
// //code
// break;

$day = 5;
switch ($day) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo 'đi làm';
        break;
    case 7:
        echo 'sinh hoạt CLB';
        break;
    default:
        echo 'relax';
        break;
}
