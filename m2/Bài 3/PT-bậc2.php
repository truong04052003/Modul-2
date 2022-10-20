<?php
//SƠ ĐỒ LỚP PT BẬC 2


//============================================//

//          QuadraticEquation           //

//-------------------------------------------//
//thuộc tính
//   $a = double;
//   $b = double;
//   $c = double;
//-------------------------------------------
//phương thức khởi tạo
//   __constructor($a, $b, $c):void
//phương thức
//   + getDiscriminant() : int;
//   + getRoot1() : int;
//   + getRoot2() : int;                      
//-------------------------------------------------
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
   $a= $_REQUEST['nhapsothunhat'];
   $b = $_REQUEST['nhapsothuhai'];
   $c = $_REQUEST['nhapsothuba'];
   
   include_once 'QuadraticEquation.php';
   //khởi tạo đối tượng
   $bachai = new QuadraticEquation($a, $b, $c);
   $bachai->getRoot1();


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="">Nhập số thứ nhất</label> <br>
        <input type="text" id="" name="nhapsothunhat"><br><br>
        <label for="">Nhập số thứ hai</label><br>
        <input type="text" id="" name="nhapsothuhai"><br><br>
        <label for="">Nhập số thứ ba</label><br>
        <input type="text" id="" name="nhapsothuba"><br><br>
        <input type="submit" value="Submit">

    </form>
</body>

</html>