<?php
// checkin 14:
// Cho biết răng với cú pháp:
// switch(true)
//     {
//         case (condition1):
//            //code here
//         break;
//         case (condition2):
//            //code here  
//         break;
//         default:
//            //code here 
//         break;
//     }
// dùng swith case true cho chương trình
// cho day = giá trị bất kỳ
// nếu day >= 2 và <= 6
// in ra "đi làm"
// nếu day == 7
// in ra "sinh hoạt"
// trường hợp còn lại in ra câu "relax"

$day = 3;
switch (true) {
    case ($day >=2 && $day <= 6):
      echo 'đi làm';
        break;
    case ($day == 7 ):
        echo 'sinh hoạt';
        break;
    default:
    echo 'relax';
        break;
}
