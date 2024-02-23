<?php

session_start();
if ($_SESSION['login'] != true) {
    header('Location: /BelajarPHP/PHPWeb/session-login/login.php');
    exit();
}

$welcome = "Welcome, " . $_SESSION['username'] . "!";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members</title>
</head>
<body>
    <h1><?=  $welcome ?></h1>

    <a href="https://github.com/kenntcky/">GitHub</a>
    <br>
    <br>
    <a href="/BelajarPHP/PHPWeb/session-login/logout.php">Logout</a>
</body>
</html>