<?php
$customerList = [
    "1" => [
        "ten" => "Đào Thị Lương",
        "ngaysinh" => "18-02-2005",
        "diachi" => "Hải Phòng",
        "anh" => "img/1.jpg"
    ],
    "2" => [
        "ten" => "Trần Ngọc Hưng",
        "ngaysinh" => "18-02-2006",
        "diachi" => "Quảng Trị",
        "anh" => "img/5.jpg"
    ],
    "4" => [
        "ten" => "Trần Văn Trường",
        "ngaysinh" => "04-05-2003",
        "diachi" => "Quảng Trị",
        "anh" => "img/4.jpg"
    ],
    "5" => [
        "ten" => "Sáo Trúc Thanh Trường",
        "ngaysinh" => "01-02-2003",
        "diachi" => "Hà Nội",
        "anh" => "img/2.jpg"
    ]
];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #FFFFE0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <table border="1">
        <caption>
            <h1>Danh sách khách hàng</h1>
        </caption>

        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Ảnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerList as $key => $value) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value['ten'] ?></td>
                    <td><?php echo $value['ngaysinh'] ?></td>
                    <td><?php echo $value['diachi'] ?></td>
                    <td><img src="<?php echo $value['anh'] ?>" alt="" width="100"></td>
                </tr>
            <?php endforeach; ?>

        </tbody>







    </table>
</body>

</html>