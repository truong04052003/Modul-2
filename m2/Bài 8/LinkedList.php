<?php

class Node
{
    public $data = '';
    public $next = null;
    public function __construct($data)
    {
        $this->data = $data;
    }
}
class LinkedList
{
    public $head = null;
    public function addFirst($item)
    {
        $node = new Node($item);
        //thêm vào đầu
        if ($this->head == null) {
            $this->head = $node;
        } else {
            // $this->head->next = $node;
            $currentNode = $this->head;
            while ($currentNode->next != null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $node;
        }
    }
}
//khởi tạo
$objLinkedList = new LinkedList();
$objLinkedList->addFirst('Toàn');
$objLinkedList->addFirst('Trường');
$objLinkedList->addFirst('Ngọc');
$objLinkedList->addFirst('11');

//in
echo '<pre>';
print_r($objLinkedList);
echo '</pre>';
?>
