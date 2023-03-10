<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $Ho = $_REQUEST['Ho'];
    $Ten = $_REQUEST['Ten'];
    $NgaySinh = $_REQUEST['NgaySinh'];
    $DiaChi = $_REQUEST['DiaChi'];
    $ViTriCongViec = $_REQUEST['ViTriCongViec'];
session_start();
class NhanVien{
    public string $Ho;
    public string $Ten;
    public $NgaySinh;
    public string $DiaChi;
    public string $ViTriCongViec;
    public array $mang = [];
    public function __construct($Ho ='',$Ten='',$NgaySinh=0,$DiaChi='',$ViTriCongViec=''){
        $this->Ho = $Ho;
        $this->Ten = $Ten;
        $this->NgaySinh = $NgaySinh;
        $this->DiaChi = $DiaChi;
        $this->ViTriCongViec = $ViTriCongViec;
    }
    public function getInfo(){
        return [
            "Ho" => $this->getHo(),
            "Ten" => $this->getTen(),
            "NgaySinh"=>$this->getNgaySinh(),
            "DiaChi"=>$this->getDiaChi(),
            "ViTriCongViec"=>$this->getViTriCongViec()
        ];
    }
    public function getHo(){
        return $this->Ho;
    }
    public function getTen(){
        return $this->Ten;
    }
    public function getNgaySinh(){
        return $this->NgaySinh;
    }
    public function getDiaChi(){
        return $this->DiaChi;
    }
    public function getViTriCongViec(){
        return $this->ViTriCongViec;
    }
}
$objNhanVien =new NhanVien ($Ho,$Ten,$NgaySinh,$DiaChi,$ViTriCongViec);
echo '<pre>';
print_r($objNhanVien);
echo '</pre>';
}
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
<form action="" method="post">
  <label for="fname">Họ</label><br>
  <input type="text" id="" name="Ho" ><br>
  <label for="fname">Tên</label><br>
  <input type="text" id="" name="Ten" ><br>
  <label for="fname">Ngày sinh</label><br>
  <input type="date" id="" name="NgaySinh" ><br>
  <label for="fname">Địa chỉ</label><br>
  <input type="text" id="" name="DiaChi" ><br>
  <label for="fname">Vị trí công việc</label><br>
  <input type="text" id="" name="ViTriCongViec" ><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>