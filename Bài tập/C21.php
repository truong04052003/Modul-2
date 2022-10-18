<?php

// checkin 25: In ra từ 1 đến 5, bỏ qua 3


for($i = 1 ; $i <= 5 ; $i++){
    if($i == 3){
        continue;
    }
    echo $i;
}

?>