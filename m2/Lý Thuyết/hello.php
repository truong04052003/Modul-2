   <?php
 $name = $_REQUEST['name'];
 $age = $_REQUEST['age'];

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php cơ bản</title>
</head>
<body>
<p> <?= $name;?></p>
<p> <?= $age;?></p>

<form method="post">
  Tên  <input type="text" name="name"><br>
   Ngày sinh <input type="date" name ="age"><br>
   <br>
   <form action="">
      <label for="">Sở Thích</label>
            <input type="checkbox" name="hobby" id="">
            <label for="">Thể Thao</label>
            <input type="checkbox" name="hobby" id="">
            <label for="">âm nhạc</label>
            <input type="checkbox" name="hobby" id="">
            <label for="">đọc sách</label> 
        </form> <br>
        <label for="">Lớp</label>
        <select name="" id="Chọn Lớp">
                <option value="">-Chọn lớp-</option>
                <option value="">C0622H1</option>
                <option value="">C0722H1</option>
                <option value="">C0822H1</option>
            </select> <br>

    <input type="submit" value="Gửi">
</form>
</body>
</html>