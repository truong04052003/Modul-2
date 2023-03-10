<?php



class  StopWatch{

public static $startTime = 0;
public static $endTime = 10;
private $color ='red';



public static function getstartTime(){
   //this ko đi kèm static
   // $this->color ='red';
echo __METHOD__;

}

public static function getendTime(){
 echo self::$endTime;
    
    }


}
//truy xuất thuộc tính static
echo StopWatch::$startTime;
echo "<br>";
echo StopWatch::$endTime;
echo "<br>";


//truy xuất phương thức static
StopWatch :: getstartTime();
echo "<br>";
StopWatch :: getendTime();


?>