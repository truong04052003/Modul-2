<?php
const STACK_IS_FULL = 'stack is full';
const STACK_IS_EMPTY = 'stack is empty';
class MyStack{
    private $elements = [];
    private $limit;
    public function __construct($limit){
        $this->limit = $limit;
    }
    //thêm phần tử vào mảng 
    public function push($item){
        if($this->isFull()){
            echo STACK_IS_FULL;
        }else{
            array_unshift($this->elements,$item);
        }
    }
      //Xoá phần tử cuối cùng đc thêm ( trên cùng)
    public function pop(){
        if($this->isEmpty()){
            echo STACK_IS_EMPTY;
        }else {
           return array_shift($this->elements);
        }
    }
    public function peek(){
        if($this->isEmpty()){
            echo STACK_IS_EMPTY;
        }else{
            return reset($this->elements);
        }
    }
    public function isEmpty(){
        return empty ($this->elements);
    }
    public function isFull(){
        if($this->elements == $this->limit){
            return true;
        }else{
            return false;
        }
    }
}

$objMyStack = new MyStack(5);
// Thêm phần tử
$objMyStack->push('toan0');
$objMyStack->push('toan1');
$objMyStack->push('toan2');
$objMyStack->push('toan3');
$objMyStack->push('toan4');
$objMyStack->push('toan5');
    //Xoá phần tử cuối cùng đc thêm (toan5) vị trí 0
echo '<br>'.$objMyStack->pop();
    //Xoá phần tử cuối cùng đc thêm (toan4) vị trí 0
echo '<br>'. $objMyStack->pop();
//lấy phần tử dữ liệu ở trên cùng của ngăn xếp, mà không xóa phần tử này (toán3)
echo '<br>'.$objMyStack->peek();
echo "<br>";
var_dump($objMyStack->isEmpty()); //Kiểm tra rỗng
echo "<br>";
var_dump($objMyStack->isFull()); // kiểm tra xem ngăn xếp đã đầy hay chưa


echo '<pre>';
print_r( $objMyStack);
echo '</pre>';
