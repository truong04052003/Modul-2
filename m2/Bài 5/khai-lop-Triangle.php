<?php

  if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $nhapa = $_REQUEST['ts_side1'];
    $nhapb = $_REQUEST['ts_side2'];
    $nhapc = $_REQUEST['ts_side3'];
    $mau = $_REQUEST['mau'];
  
class Shape {

    public $side1 = 0;
    public $side2 = 0;
    public $side3 = 0;
    public $mau ;
    public function __construct($ts_side1, $ts_side2, $ts_side3 ,$ts_mau  ){
        $this->side1 = $ts_side1;
        $this->side2 = $ts_side2;
        $this->side3 = $ts_side3;
        $this->mau = $ts_mau;
    }
    public function setSide1($nhapa){
        $this->side1 = $nhapa;
    }
    public function setSide2($nhapb){
        $this->side2 = $nhapb;
    }
    public function setSide3($nhapc){
        $this->side3 = $nhapc;
    }
    public function getSide1(){
        return $this->side1;
    }
    public function getSide2(){
        return $this->side2;
    }
    public function getSide3(){
        return $this->side3;
    }
    public function getColor(){
        return $this->mau;
    }
    public function getPerimeter(){
        return $this->side1+$this->side2+$this->side3;
    }
    public function __toString(){
        return 'tôi là tam giác';
    }
    

}
  
  class Triangle extends Shape{
    public $mau;
    public function __construct($ts_side1, $ts_side2, $ts_side3,$mau ){
        parent::__construct($ts_side1, $ts_side2,$ts_side3 ,$mau);
        $this->mau = $mau;
    }
    public function getArea(){
        return 'Diện tích của tam giác là :'.sqrt(( $this->getPerimeter())* ( $this->getPerimeter() - $this->side1 )*( $this->getPerimeter() - $this->side2)*( $this->getPerimeter() - $this->side3 ));
    }   
  }
  //khởi tạo đối tượng
  $triangle = new Triangle($nhapa, $nhapb, $nhapc, $mau);
      echo "Chu vi tam giác là ".$triangle->getPerimeter();
      echo  '<br>';
      echo $triangle->getArea();    
      echo  '<br>';
      echo "Màu :".$triangle->getColor();
      
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
<form action="" method="post">
        <label for="fname">Nhập side1:</label><br>
        <input type="text" id="" name="ts_side1"><br>
        <label for="lname">Nhập side2:</label><br>
        <input type="text" id="" name="ts_side2"><br><br>
        <label for="fname">Nhập side3:</label><br>
        <input type="text" id="" name="ts_side3"><br>
        <label for="lname">Nhập màu</label><br>
        <input type="text" id="" name="mau"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>