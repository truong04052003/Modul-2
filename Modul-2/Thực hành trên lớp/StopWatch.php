<?php
class StopWatch{
    private  $startTime = 0;
    private  $endTime = 10;
     function __construct(){
        
    }
    //getter
    public function getStartTime(){
        return $this->startTime;
    }
    public function getEndTime(){
        return $this->endTime;
    }

};
//khởi tạo đối tượng
    $objStopWatch=new StopWatch();
    //truy cập giá trị thuộc tính
    // echo $objStopWatch->startTime;
    // echo '<br>';
    // echo $objStopWatch->endTime;


    echo $objStopWatch->getstartTime();
    echo '<br>';
    echo $objStopWatch->getendTime();

    ?>