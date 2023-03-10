<?php
$number1 = ' ';
$number2 = ' ';
$operation = ' ';
$result = ' ';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $number1 = $_POST['number1'];
    $operation = $_POST['operation'];
    $number2 = $_POST['number2'];

    switch ($operation) {
        case '+':
            $result = $number1 + $number2;
            echo  $result;
            break;
        case '-':
            $result = $number1 - $number2;
            echo  $result;
            break;
        case '*':
            $result = $number1 * $number2;
            echo  $result;
            break;
        case '/':
            if ($number2 == 0) {
                echo 'Lỗi';
            }
            $result = $number1 / $number2;
            echo  $result;

            break;
        default:
            $result = 'lỗi';
            break;
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
    <form method="POST">
        <div>
            <h2>Calculator</h2>
        </div>
        <div>
            <label>Number1</label>
            <input type="text" name="number1" placeholder="Nhập số">
        </div> <br>
        <select name="operation">
            <!-- <option value="">Phép Tính</option> -->
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <div> <br>
            <label>Number2</label>
            <input type="text" name="number2" placeholder="Nhập số">
        </div>
        <div> <br>
            <input type="submit" value="Tính">
        </div>
        <p>Kết quả là : <?php echo $result ; ?></p>
    </form>
</body>

</html>