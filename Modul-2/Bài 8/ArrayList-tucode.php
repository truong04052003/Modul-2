<?php

class ArrayList{
    public array $container;
    public $limit;
    public function __construct($limit){
        $this->container = [];
        $this->limit = $limit;
}
//thêm phần tử vào mảng 
    public function add($item){
        if(!$this->isFull()){
            array_push($this->container, $item);

        }else {
            echo 'Danh sách đã đầy';
        }
}
//xóa phần tử khỏi mảng 
    public function remove($index){
        if(array_key_exists($index , $this->container)){
            unset($this->container[$index]);
        }else{
            echo 'không tồn tại phàn tử tai vị trí ' . $index ;
        }
    }
    //cập nhật phần tử vào mảng
    public function update($index , $item){
        if(array_key_exists($index , $this->container)){
            $this->container[$index] = $item;
        }else{
            echo 'không tồn tại phàn tử tai vị trí ' . $index ;
        }
    }
    //trả về các phần tử trong mảng container
    public function size(){
        return count($this->container);
    }
    //kiểm tra xem trong mảng  đã đầy phần tử hay chưa
    public function isFull(){
        return $this->size() == $this->limit;
    }
    //kiểm tra chỉ só có tồn tại trong mảng hay ko
    public function getByIndex($index){
        if(array_key_exists($index, $this->container)){
            return $this->container[$index];
        }else{
            echo 'không tồn tại phàn tử tai vị trí ' . $index ;
        }
    }


}

?>
