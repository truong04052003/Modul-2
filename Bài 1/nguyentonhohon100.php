<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
}


    function checkPrimer($num)
    {
        if ($num < 2) {
           echo $num .'ko phải là số nguyên tố';
        }
        if ($num === 2) {
            echo $num .' là số nguyên tố';
        }
        if ($num % 2 == 0) {
            echo $num .'ko phải là số nguyên tố';

        }
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
            }
            echo $num .' là số nguyên tố';
        }
        
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

    <body>
        <form method="post">
            <input type="text" name="num">
            <input type="submit" value="enter">
        </form>

    </body>

</html>