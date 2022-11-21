<?php
include_once 'ketnoidb.php';

// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$ID = $_REQUEST['id'];
// echo $id;
$sql = "DELETE FROM `quanlydocgia` WHERE `quanlydocgia`.`ID` = $ID ";
// echo $sql;
$conn->exec($sql);

//chuyen huong ve trang list.php
header("Location: listbaitap.php");