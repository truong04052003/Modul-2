<?php

class Animal {


    public function Say(){
        echo 'say';
    }
}

class ConMeo extends Animal {
    public function Say(){
        echo 'meo meo';
    }
  
}

class ConCho extends Animal{
    public function Say(){
        echo 'go go';
    }
}
//khởi tạo đối tượng

$objconmeo = new ConMeo();
echo $objconmeo->Say();
echo '<pre>';
print_r($objconmeo);
echo '</pre>';


$objconcho = new ConCho();
echo $objconcho->Say();
echo '<pre>';
print_r($objconcho);
echo '</pre>';
