<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $model['title'] ?>></title>
</head>
<body>
<h3><?= $model['content'] ?></h3>
<br>
<form action="/logout">
    <input type="submit" value="Logout">
</form>
</body>
</html>