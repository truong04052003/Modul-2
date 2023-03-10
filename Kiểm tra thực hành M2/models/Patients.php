<?php
class Patients
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `patients`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //trả về record theo id 
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `patients` WHERE id = $id";
        // var_dump($sql);die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    public function store($data)
    {
        global $conn;
        $patient_name = $data['patient_name'];
        $day_hoppital = $data['day_hoppital'];
        $status = $data['status'];
        $information_patient = $data['information_patient'];
        $Gender = $data['Gender'];
        $class  = $data['class'];
        global $conn;
        $sql = "INSERT INTO `patients` (`patient_name`,`day_hoppital`, `status`, `information_patient`, `Gender`, `class`) 
        VALUES 
        ('$patient_name','$day_hoppital','$status','$information_patient','$Gender','$class')";
        $conn->exec($sql);
    }
    //    cập nhật
    public function update($id, $data)
    {
        global $conn;
        $patient_name = $data['patient_name'];
        $day_hoppital = $data['day_hoppital'];
        $status = $data['status'];
        $information_patient = $data['information_patient'];
        $Gender = $data['Gender'];
        $class = $data['class'];
        $sql = "UPDATE `patients` SET 
            `patient_name` = '$patient_name',
            `day_hoppital` = '$day_hoppital',
            `status` = '$status',
            `information_patient` = '$information_patient',
            `Gender` = '$Gender',
            `class` = '$class'
        WHERE `id` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `patients` WHERE id = $id";
        $conn->exec($sql);
    }
}
