<?php
class StopWatch
{
    public  $startTime = 0;
    public  $endTime = 10;


    public function __construct($startTime)
    {
        $this->startTime = $startTime;
    }
    public function setstartTime($ts_startTime)
    {
        $this->startTime = $ts_startTime;
    }
    public function setstsendTime($ts_endTime)
    {
        $this->endTime = $ts_endTime;
    }
    public function getstartTime()
    {
        return $this->startTime;
    }
    public function getendTime()
    {
        return $this->endTime;
    }
    public function start()
    {
        $this->startTime = microtime(true);
    }
    public function stop()
    {
        $this->endTime = microtime(true);
    }
    public function getElapsedTime()
    {
        echo $this->endTime - $this->startTime;
    }
}
//khởi tạo đối tượng
$thoigian = new StopWatch();

//truy xuất giá trị
echo $thoigian->startTime;
echo " <br>";
echo $thoigian->endTime;
