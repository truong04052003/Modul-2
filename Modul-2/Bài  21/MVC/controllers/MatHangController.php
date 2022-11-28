<?php
include_once 'models/MatHang.php';
class MatHangController {
    public function list(){
        echo __METHOD__;
        $objMatHang = new MatHang();
        $rows = $objMatHang->all();
        include_once 'views/mathang/list.php';
    }
    //trang thêm mới
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $objMatHang = new MatHang();  
            $objMatHang->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/mathang/add.php';
    }
    //trang chỉnh sửa 
    public function edit(){
        $id = $_REQUEST['id'];
        $objMatHang = new MatHang();
        $row = $objMatHang->find( $id );

        // xu ly khi gui du lieu
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            $objMatHang->update($id,$_REQUEST);
            header("Location: index.php?page=list");
        }

        include_once 'views/mathang/edit.php';
    }
    //trang xóa
    public function delete(){
        $id = $_REQUEST['id'];
        $objMatHang = new MatHang();
        $objMatHang->delete($id);
        header("Location: index.php?page=list");
    }
}
