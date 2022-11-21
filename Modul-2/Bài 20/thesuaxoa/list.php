<?php
include_once ('ketnoidatabase.php');
$sql = "SELECT * FROM `c10_mat_hang`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);//array => object
$rows = $stmt->fetchAll();

// echo '<pre>';
// print_r($rows);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add.php">Thêm mới</a>
<table class="table table-light" border="1">
<thead>
    <tr>
        <th>MAHANG</th>
        <th>TENHANG</th>
        <th>MACONGTY</th>
        <th>Action</th>
        
    </tr>
</thead>
<tbody>
    <?php  foreach($rows as $row) :?>
        <tr>
            <td><?= $row->MAHANG ; ?></td>
            <td><?= $row->TENHANG ; ?></td>
            <td><?= $row->MACONGTY ; ?></td>
            <td>
                <a href="edit.php ?id=<?= $row->MAHANG ; ?>">Edit</a> <br>
                <a href="delete.php ?id=<?= $row->MAHANG ; ?>">Delete</a> 

            </td>
            
        </tr>
    <?php endforeach ;?>
</tbody>
</table>


</body>
</html>



