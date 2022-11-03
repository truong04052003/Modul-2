<?php
abstract class ToanHoc{
    abstract function tinhToan();
}

abstract class HinhHoc extends ToanHoc{

    abstract function tinhChuVi();
    abstract function tinhDientich();

}
class HinhVuong extends HinhHoc{
         public function tinhChuVi(){

         }
        public function tinhDientich(){
        }
        public function tinhToan(){
            
        }
}
