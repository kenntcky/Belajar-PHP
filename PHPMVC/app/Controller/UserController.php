<?php

namespace Kenntcky\BelajarPhpMvc\Controller;
use Kenntcky\BelajarPhpMvc\App\View;

class UserController
{
    function login(): void
    {
        session_start();
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login']) {
                header('Location: /products/electronics/123456');
                exit();
            }
        }

        $error = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['username'] == 'kenntcky' && $_POST['password'] == 'admin') {
                $_SESSION['login'] = true;
                $_SESSION['username'] = 'kenntcky';
                header('Location: /products/electronics/123456');
                exit();
            } else {
                $error = 'Login failed.';
            }
        }

        $model = [
            'error' => $error
        ];

        View::render('User/login', $model);
    }

    function logout(): void
    {
        session_start();
        session_destroy();

        header('Location: /login');
        exit();
    }

    function register(): void
    {
        echo 'This is the register function from User Controller.' . PHP_EOL . '<br>';
    }
}