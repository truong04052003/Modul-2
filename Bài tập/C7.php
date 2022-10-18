<?php

// Checkin 9:
// khai báo biến day bằng 1 giá trị bất kỳ từ 2 -> 7
// viết chương trình kiểm tra
// nếu day bằng 2 hoặc 3 hoặc 4 hoặc 5 hoặc 6 thì in ra câu đi làm
// nếu day bằng 7 thì in ra câu: sinh hoạt CLB
// trường hợp còn lại in ra câu: relax
// lưu ý: phần điều kiện đầu tiên có thể triển khai theo cách khác như sau
// nếu day lớn hơn hoặc bằng 2 và bé hơn hoặc bằng 6



$day = 5;
switch ($day) {
    case ($day == 2 || $day == 3 || $day == 4 || $day == 5 || $day == 6):
      echo 'đi làm';
        break;
    case ( $day == 7 ):
        echo 'sinh hoạt CLB';
    break;
    default:
    echo 'relax';
        break;
}

?>