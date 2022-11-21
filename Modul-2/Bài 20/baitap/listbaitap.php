
<?php

include_once ('ketnoidb.php');
$sql = "SELECT * FROM `quanlydocgia`";
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
<a href="add-them.php">Thêm mới</a>
<table class="table table-light" border="1">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Email</th>
        <th>Action</th>
        
    </tr>

</thead>
<tbody>
    <?php  foreach($rows as $row) :?>
        <tr>
            <td><?= $row->ID ; ?></td>
            <td><?= $row->Name ; ?></td>
            <td><?= $row->Address ; ?></td>
            <td><?= $row->Phone ; ?></td>
            <td><?= $row->Image ; ?></td>
            <td><?= $row->Email ; ?></td>
           <td> <img src="<?php echo 'http://localhost/Modul-2/Bài%2020/baitap/public/uploads/product/'?><?php echo $row->Image?>" height="100" width="100"> </td>
            <td>
                <a href="edit.php ?id=<?= $row->ID ; ?>">Edit</a> <br>
                <a href="delete-xoa.php ?id=<?= $row->ID ; ?>">Delete</a> 

            </td>
            
        </tr>
    <?php endforeach ;?>
</tbody>
</table>


</body>
</html>

