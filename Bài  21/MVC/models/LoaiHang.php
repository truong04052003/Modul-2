<?php
class LoaiHang
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `c10_loaihang`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //trả về record theo id 
    public function find($id){
        global $conn;
        $sql = "SELECT * FROM `c10_loaihang` WHERE MALOAIHANG = $id";
        // var_dump($sql);die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
        $row = $stmt->fetch();
        return $row;
    }
    public function store( $data ){
        global $conn;
        $TENLOAIHANG = $data['TENLOAIHANG'];
        global $conn;
        $sql = "INSERT INTO `c10_loaihang`(`TENLOAIHANG`) VALUES ('$TENLOAIHANG') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update( $id, $data ){
        global $conn;
        $TENLOAIHANG = $data['TENLOAIHANG'];
        $sql = "UPDATE `c10_loaihang` SET 
        `TENLOAIHANG` = '$TENLOAIHANG'
    WHERE `MALOAIHANG` = $id";
        $conn->exec($sql);
      
    }
    //xu ly xoa
    public function delete( $id){
        global $conn;
        $sql = "DELETE FROM `c10_loaihang` WHERE MALOAIHANG = $id";
        $conn->exec($sql);
    }
}

