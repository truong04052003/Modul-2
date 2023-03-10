<?php

//bài toán : check điều kện người dùng 18 tuổi

function checkAge($age){
    if($age > 18){
        return true;
    }else {
        throw new ('bạn phải đủ 18 tuổi để thực hiện chức năng này');
    }
}
try {
    checkAge(19);
    echo "bạn có thể sử dụng";
} catch (Exception $e) {
    echo $e->getMessage();
}






?>