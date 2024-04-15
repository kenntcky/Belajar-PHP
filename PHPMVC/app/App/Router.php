<?php

namespace Kenntcky\BelajarPhpMvc\App;

class Router
{

    private static array $routes = [];

    public static function add(string $method,
                               string $path,
                               string $controller,
                               string $function,
                               array  $middlewares = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middlewares
        ];
    }

    public static function run(): void
    {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variables)) {
                if ($method == $route['method'] || $method == 'POST') {

                    $controller = new $route['controller'];
                    $function = $route['function'];

                    foreach ($route['middleware'] as $middleware) {
                        $instance = new $middleware;
                        $instance->before();
                    }

                    array_shift($variables);
                    call_user_func_array([$controller, $function], $variables);

                    echo '<br>' . 'Controller : ' . $route['controller'] . PHP_EOL . '<br>' .
                        'Function : ' . $route['function'] . PHP_EOL;
                    return;

                }
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND!";
    }

}