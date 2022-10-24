<?php

class Ong {
    protected $money =1000000;

}
class Cha{
    //thuoc tinh

    protected $skinColor ='yellow';
    protected $carName = 'VF6';
    protected $money =1000000;


    //phuong thức
    public function xe_hoi(){
    echo '<br>'.$this->carName;
    }

    public  function nha(){
        echo '<br> nha 3 tang';
    }
}
 class Con extends Cha{
    //ghi đè phương thức của lớp cha 
    public function xe_hoi(){
        echo $this->money;
     parent::nha();
        echo '<br>'.$this->carName.'-độ lên VF9';
    }
    public function nha(){
        echo '<br> nhà 4 tang';

 }
}
//khởi tạo đối tượng

$con_1 = new Con();
$con_1->xe_hoi();

//truy cập thuộc tính 
echo '<br>';
$con_1->nha();

//in
echo '<pre>';
print_r($con_1);
die()


?>