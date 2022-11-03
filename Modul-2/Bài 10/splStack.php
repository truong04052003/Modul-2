<?php

$q = new SplStack();    

$q->push ('Toan');
$q->push ('Trường');
$q->push ('Ngọc');
// đưa con trỏ trở lại ví trí ban đầu (thêm cuối)
$q->rewind(); 


while($q->valid()) {
    echo '<br>'.$q->current(); //ngọc
    $q->next();//di chuyển con trỏ tới 1 bước
}

echo '<pre>';
print_r($q);
echo '</pre>';

?>