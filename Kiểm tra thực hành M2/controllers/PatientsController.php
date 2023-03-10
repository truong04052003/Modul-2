<?php
include_once 'models/Patients.php';
class PatientsController {
    public function list(){
        echo __METHOD__;
        $objpatients = new Patients();
        $rows = $objpatients->all();
        include_once 'views/patient/list.php';
    }
    //trang thêm mới
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // echo '</pre>';
            $objpatients = new Patients();
            $objpatients->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/patient/add.php';
    }
    //trang chỉnh sửa 
    public function edit(){
        $id = $_REQUEST['id'];
        $objpatients = new Patients();
        $row = $objpatients->find( $id );

        // xu ly khi gui du lieu
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            $objpatients->update($id,$_REQUEST);
            header("Location: index.php?page=list");
        }

        include_once 'views/patient/edit.php';
    }
    //trang xóa
    public function delete(){
        $id = $_REQUEST['id'];
        $objpatients = new Patients();
        $objpatients->delete($id);
        header("Location: index.php?page=list");
    }
}

//mở trang bệnh nhân
// index.php?controller=Patients&page=list
//mở trang phòng bệnh 
// index.php?controller=Preventions&page=list