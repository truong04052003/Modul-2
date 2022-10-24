<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];


    class Point2D
    {
        //thuộc tính
        public $x = 0;
        public $y = 0;
        //phương thức
        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function setX($x)
        {
            $this->x = $x;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
        public function getX()
        {
            return $this->x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function setXY($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function getXY(): array
        {
            return [$this->x, $this->y];
        }
        public function __toString()
        {
            return ' x là : ' . $this->x . ' y là : ' . $this->y;
        }
    }
    class Point3D extends Point2D
    {
        //thuộc tính
        public $z = 0;
        //phương thức
        public function __construct($x, $y, $z)
        {
            parent::__construct($x, $y);
            $this->z = $z;
        }
        public function setZ($z)
        {
            $this->z = $z;
        }
        public function getZ()
        {
            return $this->z;
        }
        public function setXYZ($x, $y, $z)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
        public function getXYZ(): array
        {
            return [$this->x, $this->y, $this->z];
        }
        public function __toString()
        {
            return 'x là : ' . $this->x . 'y là : ' . $this->y . 'z là : ' . $this->z;
        }
    }
        //khởi tạo đối tượng
        $objPoint3D = new Point3D($x, $y, $z);
        echo '<pre>';
        print_r($objPoint3D);
        echo '</pre>';
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
        <label for="fname">Nhập X:</label><br>
        <input type="text" id="" name="x"><br>
        <label for="lname">Nhập Y : </label><br>
        <input type="text" id="" name="y"><br><br>
        <label for="lname">Nhập Z : </label><br>
        <input type="text" id="" name="z"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>