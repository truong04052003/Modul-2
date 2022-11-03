<?php
const QUEUE_IS_FULL = 'queue is full';
const QUEUE_IS_EMPTY = 'queue is empty';
class Node
{
    protected $value = [];
    protected $next;
    public function __construct($next)
    {
        $this->next = $next;
    }
}
class Queue extends Node
{
    protected $front;
    protected $back;
    public function isEmpty()
    {
        if (count($this->value) == 0) {
            return true;
        } else {
            return false;
        }
    }
    public function enqueue($item)
    {
        return array_push($this->value ,$item);
    }
    public function dequeue()
    {
        return array_shift($this->value);
    }
}
$objQueue = new Queue(3);
//Thêm 3 phần tử vào Queue
$objQueue->enqueue('văn');
$objQueue->enqueue('Sử');
$objQueue->enqueue('Địa');
//Lấy ra 2 phần tử từ Queue
echo '<br>' .$objQueue->dequeue();
echo '<br>' . $objQueue->dequeue();
//Kiểm tra xem Queue có rỗng hay không
echo '<br>'; 
var_dump($objQueue->isEmpty());
//Thêm 2 phần tử vào Queue
$objQueue->enqueue('anh');
$objQueue->enqueue('hóa');
//Lấy ra 3 phần tử từ Queue
echo '<br>' . $objQueue->dequeue();
echo '<br>' . $objQueue->dequeue();
echo '<br>' . $objQueue->dequeue();
//Kiểm ra xem Queue có rỗng hay không
echo '<br>'; 
var_dump($objQueue->isEmpty());

//in
echo '<pre>';
print_r($objQueue);
echo '</pre>';
