<?php
class Preventions
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `preventions`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //trả về record theo id 
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `preventions` WHERE id = $id";
        // var_dump($sql);die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    public function store($data)
    {
        global $conn;
        $name_prevention  = $data['name_prevention']; 
        global $conn;
        $sql = "INSERT INTO `preventions`(`name_prevention`)
         VALUES ('$name_prevention') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $name_prevention = $data['name_prevention'];
        $sql = "UPDATE `preventions` SET 
        `name_prevention` = '$name_prevention'
        WHERE `id` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `preventions` WHERE id = $id";
        $conn->exec($sql);
    }
}
