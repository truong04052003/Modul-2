<?php
const STACK_IS_FULL = 'stack is full';
const STACK_IS_EMPTY = 'stack is empty';
class Stack{
    private $Stack = [];
    private $limit;
    public function __construct($limit){
        $this->limit = $limit;
    }
    public function push($item){
        if($this->isFull()){
            echo STACK_IS_FULL;
        }else{
            array_unshift($this->Stack, $item);
        }
    }
    public function pop(){
        if($this->isEmpty()){
            echo STACK_IS_EMPTY;
        }else {
            array_shift($this->Stack);
        }
    }
    public function speek(){
        if($this->isEmpty()){
            echo STACK_IS_EMPTY;
        }else {
            return reset($this->Stack);
        }
    }
    public function isEmpty(){
        return empty($this->Stack);
    }
    public function isFull(){
        if($this->Stack == $this->limit){
            return true;
        }else{
            return false;
        }
    }

}
//khởi tạo đt
$objStack = new Stack (5);
$objStack->push('truong0');
$objStack->push('truong1');
$objStack->push('truong2');
$objStack->push('truong3');
$objStack->push('truong4');
//lấy ra lần lượt 3 phần tử 
echo '<br>'.$objStack->pop();
echo '<br>'.$objStack->pop();
echo '<br>'.$objStack->pop();
//Thêm 2 phần tử mới vào stack
$objStack->push('truong5');
$objStack->push('truong6');
//Kiểm tra xem stack có rỗng hay không
var_dump( $objStack->isEmpty());
//Lấy ra 4 phần tử khỏi stack
echo '<br>'.$objStack->pop();
echo '<br>'.$objStack->pop();
echo '<br>'.$objStack->pop();
echo '<br>'.$objStack->pop();
//Kiểm tra xem stack có rỗng hay không 
var_dump( $objStack->isEmpty());

echo '<pre>';
print_r($objStack);
echo '</pre>';
