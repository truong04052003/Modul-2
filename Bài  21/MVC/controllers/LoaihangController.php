<?php
include_once 'models/LoaiHang.php';
class LoaiHangController {
    public function list(){
        echo __METHOD__;
        $objLoaiHang = new LoaiHang();
        $rows = $objLoaiHang->all();
        include_once 'views/loaihang/list-loaihang.php';
    }
    //trang thêm mới
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $LoaiHang = new LoaiHang();
            $LoaiHang->store( $_REQUEST );
            header("Location: index.php?page=loaihang/list");
        }
        include_once 'views/loaihang/add-loaihang.php';
    }
    //trang chỉnh sửa 
    public function edit(){
        $id = $_REQUEST['id'];  
        $objLoaiHang = new LoaiHang();
        $row = $objLoaiHang->find( $id );

        // xu ly khi gui du lieu
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            $objLoaiHang->update($id,$_REQUEST);
            header("Location: index.php?page=list");
        }

        include_once 'views/loaihang/edit-loaihang.php';
    }
    //trang xóa
    public function delete(){
        $id = $_REQUEST['id'];
        $objLoaiHang = new LoaiHang();
        $objLoaiHang->delete($id);
        header("Location: index.php?page=list");
    }
}
