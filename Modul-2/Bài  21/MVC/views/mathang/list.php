<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        background-color :aquamarine;
        width: 90%;
    }
</style>
<body>
<a href="index.php?page=add"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>MAHANG</th>
            <th>TENHANG</th>
            <th>MACONGTY</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?= $row->MAHANG; ?> </td>
                <td><?= $row->TENHANG; ?></td>
                <td><?= $row->MACONGTY; ?></td>
                <td>
                <a href="index.php?controller=MatHang&page=edit&id=<?= $row->MAHANG ;?>">Edit</a> <br>
                    <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=MatHang&page=delete&id=<?= $row->MAHANG ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
