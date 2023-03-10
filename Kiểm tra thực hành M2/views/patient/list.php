
<div class="container-fluid px-4">

<div class="mb-4">
    <a href="index.php?controller=Patients&page=add" class="btn btn-danger .col "> Thêm mới </a> <br>

</div>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>patient_name</th>
            <th>day_hoppital</th>
            <th>status</th>
            <th>information_patient </th>
            <th>Gender</th>
            <th>class </th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?= $row->id; ?> </td>
                <td><?= $row->patient_name; ?></td>
                <td><?= $row->day_hoppital; ?></td>
                <td><?= $row->status; ?></td>
                <td><?= $row->information_patient; ?></td>
                <td><?= $row->Gender; ?></td>
                <td><?= $row->class; ?></td>
                <td>
                    <a href="index.php?controller=Patients&page=edit&id=<?= $row->id; ?>">Edit</a> <br>
                    <a onclick=" return confirm('Are you sure you want to delete??'); " href="index.php?controller=Patients&page=delete&id=<?= $row->id; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php?controller=Preventions&page=list" class="btn btn-danger .col ">Phòng bệnh</a>

</div>
