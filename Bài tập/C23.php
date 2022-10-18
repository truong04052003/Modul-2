<?php

// checkin 27:
// sử dụng vòng lặp lồng nhau để in ra 1 table gồm 8 hàng và 3 cột
// gợi ý:
// - lặp 8 lần cặp thẻ tr: dùng biến i
//   trong vòng lặp trên: lặp 3 lần cặp thẻ td: dùng biến j
//   trong cặp thẻ td in ra kết quả của i và j


$html = '<table = border ="1">';
for($i = 1 ; $i <= 8 ; $i++){
    $html .= '<tr>';
    for ($k = 1 ; $k <= 3 ; $k++){
        $html .= '<td>' . $k . '</td>';
      
    }
    $html = '</tr>';
}
'$html .= </table>';

?>