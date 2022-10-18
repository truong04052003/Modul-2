<?php


// check in 18:
// lặp từ 100 -> 1
// chỉ in ra số lẽ
// hướng dẫn: số lẽ được kiểm tra bằng cách chia lấy dư cho 2 không bằng 0 , chia lấy dư ( % )


for($i = 100 ; $i > 1 ; $i-- ){
    if ($i % 2 != 0 ){
        echo $i;
        echo '<br>';
    }
}

?>