<?php

// Checkin 16:
// dùng vòng lặp for viết ra bảng cửu chương 5:
// kết quả dự kiến:
// 5 x 1 = 5
// 5 x 2 = 10
// 5 x 3 = 15
// ...
// 5 x 10 = 50
// Gợi ý:
// - lặp từ 1 -> 10
// - trong vòng lặp in ra: 5 x i = ( 5 * i ) 
// - lưu ý i là biến được chạy trong vòng lặp

for($i = 5 ; $i < 6 ; $i++){
   for($j = 1 ; $j <= 10 ; $j++){
    echo "$i x $j =" . ($i * $j);
    echo '<br>';
   }
}

?>