<?php
function chia2So($a, $b)
{
    if ($b == 0) {
        throw new Exception("số chia bằng 0");
    }
    echo $a / $b;
}
$a = 4;
$b = 0;
try {

    chia2So($a, $b);
} catch (\Exception $e) {
    echo $e->getMessage();
}finally {
    echo "thực hiện finally";
}
