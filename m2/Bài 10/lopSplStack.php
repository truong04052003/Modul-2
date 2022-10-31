<?php

abstract class SplDoublyLinkedList{
    abstract function split();
}
interface Iterator {
    function next();
}
interface ArrayAccess {
    function offsetSet($offset, $value);
}
interface Countable {
    function count();
}
class SplStack extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {
    public $item;
    public function __construct($item){
        $this->item = $item;
    }
    public function split(){

    }
   public function next(): void
   {
    
   }
   public function offsetSet($offset, $value): void{

   }
   //đếm
   public function count(){

   }
   public function add(){

   }
   //Trả về phần tử hiện tại trong một mảng
   public function current(){
    
   }
   //trả về các chế độ và cờ khác nhau ảnh hưởng đến quá trình lặp lại.
   public function getIteratorMode(){

   }
   public function isEmpty(){

   }
   // trả về phần tử chỉ mục của vị trí mảng hiện tại.
   public function key(){

   }
   //di chuyển con trỏ bên trong đến và xuất ra phần tử tiếp theo trong mảng.
   public function next(){

   }
   //Trả true về thành công hoặc falsethất bại.
   public function offsetExists(){

   }
   //Giá trị tại chỉ mục được chỉ định hoặc null.
   public function offsetGet(){

   }
   //Không có giá trị nào được trả lại.
   public function offsetSet(){

   }
   public function offsetUnset(){
    
   }

        
    
}
