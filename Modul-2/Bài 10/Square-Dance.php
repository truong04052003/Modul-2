<?php

class Dancer{
    public $name = '';
    public $gender =false;
    public function __construct($name , $gender){
        $this->name = $name;
        $this->gender = $gender;
    }



}
$qNam = new SplQueue();
$qNam->enqueue(new Dancer('Toan' , true));
$qNam->enqueue(new Dancer('Truong' , true));
$qNam->enqueue(new Dancer('Ngọc' , true));


$qNu = new SplQueue();
$qNu->enqueue(new Dancer('Tâm' , false ));
$qNu->enqueue(new Dancer('Huyền' , false));

$qNam->rewind();
$qNu->rewind();

$pairs = [];
$namWWaiting =[];
$nuWWaiting =[];
while ($qNam->valid() || $qNu->valid()){
    if($qNam->valid() && $qNu->valid()){
        $pairs[] = [
            'nam'=>$qNam->current(),
            'nu'=>$qNu->current(),
        ];
        $qNam->next();
        $qNu->next();

    }else if ($qNam->valid()){
        $namWWaiting[] = $qNam->current();
        $qNam->next();
        
    }else if($qNu->valid()){
        $nuWWaiting[] = $qNu->current();
        $qNu->next();
    }
}
    
echo '<pre>';
echo "=============PAIRS============";
print_r($pairs);
echo "=============PAIRS============";
print_r($namWWaiting);
echo "=============PAIRS============";
print_r($nuWWaiting);
echo '</pre>';


