<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $xSpeed = $_POST['xSpeed'];
    $ySpeed = $_POST['ySpeed'];

    class Point
    {
        public $x = 0;
        public $y = 0;
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
    class MoveablePoint extends Point
    {
        public $xSpeed = 0;
        public $ySpeed = 0;
        public function __construct($x, $y, $xSpeed, $ySpeed)
        {
            parent::__construct($x, $y);
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        public function setXSpeed($xSpeed)
        {
            $this->xSpeed = $xSpeed;
        }
        public function setYSpeed($ySpeed)
        {
            $this->ySpeed = $ySpeed;
        }
        public function getXSpeed()
        {
            return $this->xSpeed;
        }
        public function getYSpeed()
        {
            return $this->ySpeed;
        }
        public function getSpeed(): array
        {
            return [$this->x, $this->y, $this->xSpeed, $this->ySpeed];
        }
        public function move()
        {

            return $this->xSpeed;
        }
        public function __toString()
        {

            return 'x là : ' . $this->x . 'y là : ' . $this->y . 'xSpeed là: ' . $this->xSpeed . 'ySpeed là : ' . $this->ySpeed;
        }
    }

    //khởi tạo đối tượng
    $objMoveablePoint = new MoveablePoint($x, $y, $xSpeed, $ySpeed);
    echo '<pre>';
    print_r($objMoveablePoint);
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
        <label for="lname">Nhập xSpeed : </label><br>
        <input type="text" id="" name="xSpeed"><br><br>
        <label for="lname">Nhập ySpeed : </label><br>
        <input type="text" id="" name="ySpeed"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>