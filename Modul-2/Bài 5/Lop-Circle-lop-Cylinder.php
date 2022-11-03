<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $radius = $_POST['radius'];
    $color = $_POST['color'];
    $height = $_POST['height'];

    class Circle
    {
        //thuộc tính
        public $radius = 0;
        public $color;
        public $height;


        //phương thức khởi tạo
        public function __construct($radius, $color, $height)
        {
            $this->radius = $radius;
            $this->color = $color;
            $this->height = $height;
        }
        //setter
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
        public function setColor($color)
        {
            $this->color = $color;
        }
        public function setHeight($height)
        {
            $this->height = $height;
        }
        //getter
        public function getRadius()
        {
            return $this->radius;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function getHeight()
        {
            return $this->height;
        }
        public function getArea()
        {
            return ($this->radius * $this->radius) * Pi();
        }
        public function toString()
        {
            return $this->getArea();
        }
    }
    class Cylinder extends Circle
    {
        public $height;
        public function getVolume()
        {
            return 'thể tích là : ' . $this->getArea() * $this->height;
        }
        public function toString()
        {
            return $this->getVolume();
        }
    }

    //khởi tạo đối tượng
    $cylinder = new Cylinder($radius, $color, $height);

    $cylinder->setRadius($radius);
    $cylinder->setHeight($height);
    $cylinder->setColor($color);
    echo $cylinder->getRadius();
    echo '<br>';
    echo $cylinder->getHeight();
    echo '<br>';
    echo $cylinder->getColor();
    echo '<br>';
    echo $cylinder->toString();
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
        <label for="fname">Nhập radius:</label><br>
        <input type="text" id="" name="radius"><br>
        <label for="lname">Color:</label><br>
        <input type="text" id="" name="color"><br><br>
        <label for="lname">Nhập height:</label><br>
        <input type="text" id="" name="height"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>