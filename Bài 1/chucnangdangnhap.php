<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "admin" && $password === "admin") {
        echo 'Welcome ' . $username . ' to website';
    } else {
        echo 'Login Error';
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
    <form action="" method="post">

        <div class="login">
            <h2>Login</h2>
            <label>
                Username:
                <input type="text" name="username" placeholder="username" />
            </label> <br>
            <label> <br>
                Password:
                <input type="password" name="password" placeholder="password" />
            </label> <br>
            <input type="submit" value="Sign in" />
        </div>
    </form>
</body>

</html>