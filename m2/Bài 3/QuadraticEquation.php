<?php
class QuadraticEquation
{
    public $a = 0;
    public $b = 0;
    public $c = 0;


    public function __construct($ts_a, $ts_b, $ts_c)
    {
        $this->a = $ts_a;
        $this->b = $ts_b;
        $this->c = $ts_c;
    }
    public function setA($a){
        $this->a = $a;
    }
    public function getA()
    {
        return $this->a;
    }
    public function setB($b)
    {
        $this->b = $b;
    }

    public function getB()
    {
        return $this->b;
    }
    public function setC($c)
    {
        $this->c = $c;
    }
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant()
    {
        return ($this->b * $this->b) - 4 * ($this->a * $this->c);
    }
    public function getRoot1()
    {
        $delta = $this->getDiscriminant();
        if ($delta > 0) {
            $x1 = (-$this->b + sqrt($delta)) / (2 * $this->a);
            $x2 = (-$this->b - sqrt($delta)) / (2 * $this->a);
            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        } else if ($delta == 0) {
            $x1 = (-$this->b / (2 * $this->a));
            echo "Phương trình có nghiệm kép: x1 = x2 = " . $x1;
        } else {
            echo "Phương trình vô nghiệm";
            echo "<br>" . "<br>";
        }
    }
}
