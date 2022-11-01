<?php


$queue = new SplQueue();
$queue->enqueue('Toan');
$queue->enqueue('Truong');
$queue->enqueue('Ngoc');

// đưa con trỏ trở lại ví trí ban đầu (thêm cuối)
$queue->rewind(); 

while ($queue->valid()) {
    echo $queue->current(); //ngoc
    $queue->next(); //di chuyển con trỏ tới 1 bước
}

echo '<pre>';
print_r($queue);
echo '</pre>';



?>