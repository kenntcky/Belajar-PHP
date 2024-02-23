<?php

session_start();
session_destroy();

header('Location: /BelajarPHP/PHPWeb/session-login/login.php');
exit();