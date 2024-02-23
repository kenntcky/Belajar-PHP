<?php

if ($_SERVER["PATH_INFO"] == "/get") {
    require_once "./get.php";
    exit();
} elseif ($_SERVER["PATH_INFO"] == "/post") {
    require_once "./post.php";
    exit();
}