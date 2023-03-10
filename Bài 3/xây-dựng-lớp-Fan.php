    <?php

    define("SLOW", 1);
    define("MEDIUM", 2);
    define("FAST ", 3);


    class Fan
    {
        public $speed = SLOW;
        public $on  = false;
        public $radius   = 5;
        public $color   = "blue";

        public function setSpeed($ts_speed)
        {
            $this->speed = $ts_speed;
        }
        public function setOn($ts_on)
        {
            $this->on = $ts_on;
        }
        public function setRadius($ts_radius)
        {
            $this->radius = $ts_radius;
        }
        public function setColor($ts_color)
        {
            $this->color  = $ts_color;
        }
        public function getSpeed()
        {
            return $this->speed;
        }
        public function getOn()
        {
            return $this->on;
        }
        public function getRadius()
        {
            return $this->radius;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function __construct()
        {
        }
        public function toString()
        {
            if ($this->getOn()) {
                return "quạt đang bật:" . "<br>" . "tốc độ: " .  $this->getSpeed() . "<br>" . "màu sắc: " . $this->getColor() . "<br>" . "bán kính: " . $this->getRadius();
            } else {
                return "quạt đã tắt:" . "<br>" . "màu sắc: " . $this->getColor() . "<br>" . "bán kính: " . $this->getRadius();
            }
        }
    }
    //khởi tạo đối tượng
    $fan1 = new Fan();

    $fan1->setSpeed(100);
    $fan1->setRadius(10);
    $fan1->setColor('yellow');
    $fan1->setOn(true);


    // in ra
    echo '<pre>';
    print_r($fan1);
    echo '</pre>';

    //khởi tạo đối tượng 2
    $fan2 = new Fan();

    $fan2->setSpeed(1);
    $fan2->setRadius(5);
    $fan2->setColor('blue');
    $fan2->setOn(false);

    echo '<pre>';
    print_r($fan2);
    echo '</pre>';
