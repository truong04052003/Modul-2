<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nhapten = $_REQUEST['nhapten'];
    $nhapemail = $_REQUEST['nhapemail'];
    $nhaprole = $_REQUEST['nhaprole'];
}


class User
{
    protected $name = '';
    protected  $email = '';
    protected $role = '';

    public function __construct($ts_name, $ts_email, $ts_role)
    {
        $this->name = $ts_name;
        $this->email = $ts_email;
        $this->role = $ts_role;
    }
    public function getInfo()
    {
        return $this->name;
    }
    public function isAdmin()
    {
        if ($this->role == 1) {
            echo "admin";
        } else if ($this->role == 2) {
            echo "là người dùng bình thường";
        } else {
            echo "số role khong có";
        }
    }
    public function setName($ts_name)
    {
        $this->name = $ts_name;
    }
    public function setEmail($ts_email)
    {
        $this->email = $ts_email;
    }
    public function setRole($ts_role)
    {
        $this->role = $ts_role;
    }
}

//khởi tạo đối tượng
$objuser = new User($nhapten, $nhapemail, $nhaprole);

// in ra
echo "<pre>";
print_r($objuser->isAdmin());
echo "</pre>";
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
    <form method="post">
        <label for="">Nhập tên của người dùng</label> <br>
        <input type="text" id="" name="nhapten"><br><br>
        <label for="">Nhập email của người dùng</label><br>
        <input type="text" id="" name="nhapemail"><br><br>
        <label for="">Nhập giá trị role của người dùng</label><br>
        <input type="text" id="" name="nhaprole"><br><br>
        <input type="submit" value="Submit">

    </form>
</body>

</html>