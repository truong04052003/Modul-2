
<div class="container-fluid px-4">

<a href="index.php?controller=Preventions&page=add" class="btn btn-danger .col "> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>name_prevention</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?= $row->id; ?> </td>
                <td><?= $row->name_prevention; ?></td>
                <td>
                    <a href="index.php?controller=Preventions&page=edit&id=<?= $row->id; ?>">Edit</a> <br>
                    <a onclick=" return confirm('Are you sure you want to delete??'); " href="index.php?controller=Preventions&page=delete&id=<?= $row->id; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php?controller=Patients&page=list" class="btn btn-danger .col ">Bệnh nhân</a>

</div>
