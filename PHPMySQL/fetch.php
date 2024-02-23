<?php

require_once "GetConnection.php";

$db = getConnection();

$username = "kenntcky";
$password = "woi";

$sql = "SELECT * FROM userdata";
$result = $db->query($sql);
//$result->execute([$username, $password]);


$datas = $result->fetchAll();
var_dump($datas);

if ($row = $result->fetch()) {
    echo "Login successful! Welcome back, ". $row["username"] . "!" . PHP_EOL;
} else {
    echo "Login failed.";
}



//$success = false;
//foreach ($result as $row) {
//    $success = true;
//    echo "Success login as ". $row["username"] . "!" . PHP_EOL;
//}
//
//if ($success == false) {
//    echo "Wrong username or password.";
//}

$db = null;
