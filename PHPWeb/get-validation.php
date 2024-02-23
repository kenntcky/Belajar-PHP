<?php

if (!isset($_GET["name"]) || $_GET["name"] == "") {

    http_response_code(400);
    echo "Name is either not valid or empty";
    exit();

}

echo "Halo " . $_GET["name"] . PHP_EOL;