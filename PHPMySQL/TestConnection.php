<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_pdo";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Successfully connected to the database!" . PHP_EOL;

    $connection = null;
} catch (PDOException $exception) {
    echo "Failed to connect database : " . $exception->getMessage() . PHP_EOL;
}

$database = null;