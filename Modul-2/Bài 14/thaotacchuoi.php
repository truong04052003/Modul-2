<?php
//strlen($string): hàm trả về độ dài chuỗi
echo strlen('xin chào');
echo '<br>';

//str_word_count($string): hàm trả về số từ trong chuỗi
echo str_word_count('xin chào bạn ');
echo '<br>';

//strrev($string): hàm đảo ngược chuỗi
echo strrev('0123456789');
echo '<br>';

//strpos($string, $text): hàm tìm kiếm chuỗi $text trong chuỗi $string. Nếu tìm thấy, hàm trả về chỉ số ký tự đầu 
//tiên tìm thấy của chuỗi. Nếu không tìm thấy, hàm trả về FALSE.
echo strpos("Hello world!", "world"); 
echo '<br>';

//str_replace($find, $replace, $string): hàm tìm kiếm chuỗi $find,
// thay thế chuỗi đó bằng $replace trong chuỗi ban đầu $string
echo str_replace("toan", "truong", "Hello truong");
echo '<br>';

//substr($string, $start, $length): Hàm này có tác dụng cắt chuỗi $string,
// bắt đầu ở vị trí $strat và có giới hạn $length
echo substr("xin chao ban" , 10). "<br>"; //an
echo substr("xin chao ban" , -1). "<br>"; //n
echo substr("xin chao ban" , 0 ,10 ). "<br>"; //xin chao b
echo substr("xin chao ban" , 0 ,-1 ). "<br>"; //xin chao ba 
echo '<br>';

//strtolower($string): Hàm có tác dụng chuyển chuỗi $string sang chữ thường
echo strtolower('chào BAN NHA');
echo '<br>';

//strtoupper($string): Hàm có tác dụng chuyển đổi chuỗi $string sang chữ hoa
echo strtoupper("chao TOAN");
echo '<br>';

//trim($string, $charlist): Hàm có tác dụng loại bỏ khoảng trắng hoặc các ký tự $charlist trong chuỗi $string
 
$str = "Hello World!";
echo $str . "<br>";
echo trim($str, "Hed!"); // llo Worl





?>