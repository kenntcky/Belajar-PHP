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
use Kenntcky\BelajarPhpMvc\Controller\ProductController;
use Kenntcky\BelajarPhpMvc\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/([0-9]*)', ProductController::class,
    'container', [AuthMiddleware::class]);

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', UserController::class, 'login');
Router::add('GET', '/logout', UserController::class, 'logout');
Router::add('GET', '/register', UserController::class, 'register');

Router::run();