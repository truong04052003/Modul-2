<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $fullname = 'Trần Văn Trường';
    // echo $fullname;


    //Nhúng biến vào trong chuỗi
        // $fullname = 'Trần Văn Trường';
        // echo "Xin chào , {$fullname}!";

    //Cộng 2 phần tử
    // $a = 10;
    // $b = 20;
    // echo $a + $b;

    //=============================================================
    //Cấu trúc if else 
    // $is_login = true;
    // if($is_login == true){
    //     echo "Bạn đã đăng nhập thành công ";
    // }else{
    //     echo "Bạn đăng nhập chưa thành công";
    // }

    // =============================================================
    // VÒNG LẶP
    // $n = 10;
    // $sum = 0;
    // for( $i = 1 ; $i <= $n ; $i++ ){
    //     if($i % 2 != 0){
    //         $sum = $sum + $i;
    //     }
    //     echo $i."<br>";
    // }
    // echo $sum;
    //============================================================
    //HÀM

    function total_evennumber($n){
        $sum = 0;
        for( $i = 1 ; $i <= $n ; $i++ ){
                if($i % 2 == 0){
                    $sum = $sum + $i;
                }
            }
            return $sum;
    }
    echo total_evennumber(100);


    //=================================================================
   
    ?>
</body>
</html>