<?php

include_once "node.php";
include_once "LinkedList.php";


$linkedList = new LinkedList();
$linkedList->insertFirstNode(10);
$linkedList->insertFirstNode(20);
$linkedList->insertFirstNode(50);
$linkedList->insertlastNode(40);
echo '<br>';

// echo '<pre>';
// print_r($linkedList);
// echo '</pre>';
var_dump($linkedList);


?>

