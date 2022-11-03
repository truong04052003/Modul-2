<?php

class Rectangle
{
    public $width = 0;
    public $height  = 0;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    //tính diện tích
    public function getArea()
    {
        return $this->width * $this->height;
    }
    //tính chu vi
    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
    //hiển thị
    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
//khởi tạo đối tượng
$rectangle = new Rectangle(20, 30);


//thiết lập giá trị thuộc tính
$rectangle->width = 20;
$rectangle->height = 30;


//truy cập thuộc tính
echo $rectangle->width;
echo '<br> ';
echo $rectangle->height;
echo '<br> ';


//truy xuất phương thức 
echo  $rectangle->getPerimeter();
echo '<br> ';
echo  $rectangle->getArea();
echo '<br> ';
