<?php

// Tạo lớp có tên là HCN
// gồm 2 thuộc tính: dai, rong
// gồm 2 phương thức: tinhChuVi, tinhDienTich
// - Khởi tạo đối tượng
// - THiết lập giá trị thuộc tính: dai, rong
// - Truy cập 2 phương thức tinhChuVi, tinhDienTich

class HCN{
    public $dai = '';
    public $rong = '';

    //hàm khởi tạo
    public function __construct($ts_dai,$ts_rong){
        $this->dai= $ts_dai;
        $this->rong= $ts_rong;
    }

    //setter
    public function setDai($ts_dai)
    {
        $this->dai = $ts_dai;
    }
    public function setRong($ts_rong)
    {
        $this->rong = $ts_rong;
    }

    //getter
    public function getDai()
    {
        return $this->dai;
    }
    public function getRong()
    {
        return $this->rong;
    }

    // phương thức
    public function tinhChuVi()
    {
        $ket_qua = ($this->dai + $this->rong) * 2;
        echo 'chu vi là : ' . $ket_qua;
        echo '<br>';
    }
    public function tinhDienTich()
    {
        $ket_qua2 = $this->dai * $this->rong;
        echo 'diện tích là : ' . $ket_qua2;
        echo '<br>';
    }
}

    //khởi tạo đối tượng
    $hcn = new HCN(20,10);

    //thiết lập giá trị thuộc tính 
    //  $hcn -> dai = 30;
    $hcn->setDai(30);
    //  $hcn -> rong = 20;
    $hcn->setRong(20);


    //truy cập thuộc tính 
    // echo $hcn->dai; //30
    echo $hcn->getDai();
    echo '<br>';
    // echo $hcn->rong; //20
    echo $hcn->getRong();
    echo '<br>';

    //truy xuất phương thức 
    $hcn->tinhChuVi();
    $hcn->tinhDienTich();

    //in ra
    echo "<pre>";
    print_r($hcn);
    echo "</pre>";
