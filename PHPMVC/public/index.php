<?php

//$path = "/index";
//
//if (isset($_SERVER["PATH_INFO"])) {
//    $path = $_SERVER["PATH_INFO"];
//}
//
//require_once __DIR__ . "/../app/View" . $path . ".php";

require_once __DIR__ . '/../vendor/autoload.php';
use Kenntcky\BelajarPhpMvc\App\Router;
use Kenntcky\BelajarPhpMvc\Controller\HomeController;
use Kenntcky\BelajarPhpMvc\Controller\UserController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', UserController::class, 'login');
Router::add('GET', '/register', UserController::class, 'register');

Router::run();