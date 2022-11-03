<?php

class MyList{

    protected $size;
    protected $elements = [];
    public array $originElements;
    public function insert($index, $item){
        array_splice($this->elements, $index, 0, $item);
    }
    public function add($item){
            array_push($this->elements, $item);
        }
    public function remove($index){
        unset($this->elements[$index]);
    }
    public function get($index){
        return $this->elements[$index];
    }
    //xóa tất cả các phần tử 
    public function clear(){
        return $this->elements = [];
    }
    public function addAll($arr){
        
            if ($this->size() >= ($this->getCount() + count($arr))) {
                $this->elements = array_merge($this->elements, $arr);
            } else {
                echo "Mảng bị giới hạn ";
            }
            return $this->elements;
        }
    public function indexOf($item){
        return array_search($item, $this->elements);
    }
    public function isEmpty(){
        if (count($this->elements) > 0) {
            return 'false';
        } else {
            return 'true';
        }
    }
    public function sort(){
      sort($this->elements);
      return $this->elements;
    }
    public function reset(){
        return reset($this->elements);
    }
    public function size(){
        return count($this->elements);
    }
}
//khởi tạo đối tượng 

$hehe = new MyList();
//thêm phần tử
$hehe->add('tran');
$hehe->add('van');
$hehe->add('truong');
$hehe->add('hoang');
$hehe->add('dang');
$hehe->add('toan');

//xóa phần tử 
$hehe->remove(3);
//lấy phần tử
echo $hehe->get(2);
echo '<br>';
//chèn
$hehe->insert(3, 'ka');
//xóa tất cả các phần tử 
// $hehe->clear();
//lấy về số lượng phần tử
echo $hehe->size();
echo '<br>';
//tìm kiếm phần tử trong mảng 
echo $hehe->indexOf('toan');
echo '<br>';
// đặt lại con trỏ nội bộ của mảng về phần tử đầu tiên.
echo $hehe->reset();
echo '<br>';
//sắp xếp 
var_dump($hehe->sort());
//thêm thêm các phần tử
$hehe->addAll();    



//in 
echo '<pre>';
print_r($hehe);
echo '</pre>';