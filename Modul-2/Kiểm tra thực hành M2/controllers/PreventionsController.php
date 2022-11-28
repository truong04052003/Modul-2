<?php
include_once 'models/Preventions.php';
class PreventionsController {
    public function list(){
        echo __METHOD__;
        $objpreventions = new Preventions();
        $rows = $objpreventions->all();
        include_once 'views/prevention/list-prevention.php';
    }
    //trang thêm mới
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $objpreventions = new Preventions();
            $objpreventions->store( $_REQUEST );
            header("Location: index.php?controller=Preventions&page=list");
        }
        include_once 'views/prevention/add-prevention.php';
    }
    //trang chỉnh sửa 
    public function edit(){
        $id = $_REQUEST['id'];  
        $objpreventions = new Preventions();
        $row = $objpreventions->find( $id );

        // xu ly khi gui du lieu
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            $objpreventions->update($id,$_REQUEST);
            header("Location:index.php?controller=Preventions&page=list");
        }

        include_once 'views/prevention/edit-prevention.php';
    }
    //trang xóa
    public function delete(){
        $id = $_REQUEST['id'];
        $objpreventions = new Preventions();
        $objpreventions->delete($id);
        header("Location: index.php?controller=Preventions&page=list");
    }
}
