<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "123";
};

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
    <form method="POST">
        <div>
            <label>Number1</label>
            <input type="text" name="number1" placeholder="Nhập số">
        </div>
        <select name="operation">
            <option value="">Phép tính</option>
            <option value="">+</option>
            <option value="">-</option>
            <option value="">*</option>
            <option value="">/</option>
        </select>
        <div>
            <label>Number2</label>
            <input type="text" name="number2" placeholder="Nhập số">
        </div>
        <div>
            <input type="submit" value="Tính">
        </div>
    </form>
</body>

</html>