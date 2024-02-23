<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST["name"] . PHP_EOL;
    echo $_POST["pilihan"] . PHP_EOL;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>

<form action="./post.php" method="post">
    <input type="text" name="name">
    <select name="pilihan">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>


    </select>
    <button type="submit">kirim</button>
</form>
</body>
</html>
