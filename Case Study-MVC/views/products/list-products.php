<?php
include_once './views/LAYOUT/header.php';

?>
<div class="container-fluid px-4">
    <a href="index.php?controller=Products&page=add" class="btn btn-danger .col "> Thêm mới </a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>TENSANPHAM</th>
                <th>category_id </th>
                <th>IMAGE </th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $key => $row) : ?>
                <tr>
                    <td><?= ++$key; ?> </td>
                    <td><?= $row->TENSANPHAM; ?></td>
                    <td><?= $row->category_id; ?></td>
                    <td> <img src="<?php echo 'http://localhost/Modul-2/Case%20Study-MVC/views/LAYOUT/assets/img/' ?><?php echo $row->IMAGE ?>" height="100" width="100"> </td>
                    <td>
                        <a href="index.php?controller=Products&page=edit&id=<?= $row->ID; ?>">Edit</a> <br>
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?controller=Products&page=delete&id=<?= $row->ID; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include_once './views/LAYOUT/footer.php';
?>