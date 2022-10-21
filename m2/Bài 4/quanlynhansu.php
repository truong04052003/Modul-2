
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for=""fname >Họ</label> <br>
        <input type="text" id="" name="ho"><br><br>
        <label for="">Tên</label><br>
        <input type="text" id="" name="ten"><br><br>
        <label for=""fname>Ngày sinh</label><br>
        <input type="date" id="" name="ngaysinh"><br><br>
        <label for=""fname>Địa chỉ</label><br>
        <input type="text" id="" name="diachi"><br><br>
        <label for="" fname >Vị trí công việc</label><br>
        <input type="text" id="" name="vitricongviec"><br><br>
        <input type="submit" value="Submit">

    </form>
    <table border="1">
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>

        <thead>
            <tr>
                <th>Họ</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Vị trí công việc</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerList as $key => $value) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value['ho'] ?></td>
                    <td><?php echo $value['ten'] ?></td>
                    <td><?php echo $value['ngaysinh'] ?></td>
                    <td><?php echo $value['diachi'] ?></td>
                    <td><?php echo $value['vitricongviec'] ?></td>
                
                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
</body>
</html>
