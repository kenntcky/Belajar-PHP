<?php

session_start();
$_SESSION['login'] = false;

if ($_SESSION['login']) {
    header('Location: /BelajarPHP/PHPWeb/session-login/index.php');
    exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == "kenntcky" && $_POST['password'] == 'atmin') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'kenntcky';
        header('Location: /BelajarPHP/PHPWeb/session-login/index.php');
        exit();
    } else {
        $error = "Login failed.";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>


<h1>Login</h1>
<form action="/BelajarPHP/PHPWeb/session-login/login.php" method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password :
        <input type="password" name="password">
    </label>
    <?php if ($error != "") { ?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>