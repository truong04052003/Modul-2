<?php 

class Stack {

    protected $stack = [];
    protected $n ;
    public function __construct($n){
        $this->n = $n;
    }
    public function push($item){
        array_unshift($this->stack,$item);
    }
    public function pop(){
        return array_shift($this->stack);
    }
    

}
$objStack = new Stack(3);
//thêm
$objStack->push('hehe');
$objStack->push('hihi');
$objStack->push('haha');
  //Xoá phần tử cuối cùng đc thêm 
$objStack->pop(); //haha
$objStack->pop();
$objStack->pop();
//thêm vào lại
$objStack->push('haha');
$objStack->push('hehe');
$objStack->push('hihi');

echo '<pre>';
print_r($objStack);
echo '</pre>';