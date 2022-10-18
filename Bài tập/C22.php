<?php

// checkin 26: dùng continue và vòng lặp for
// để in ra các số chẵn từ 1 -> 10


for($i = 1 ; $i <= 10 ; $i++){
    if ($i % 2 != 0 ){
        continue;
    }
    echo $i;
    echo '<br>';
}

?>