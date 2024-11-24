<?php

namespace App\Core;

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/Model.php';

class Router
{

    public static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run(): void
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variables)) {
                if ($route['method'] != $method) {
                    http_response_code(405);
                    echo "METHOD NOT ALLOWED!";
                    return;
                }

                $controller = new $route['controller'];
                $function = $route['function'];
                
                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);
                return;
            }
        }


        // Handle route not found
        http_response_code(404);
        echo "CONTROLLER NOT FOUND!";
    }
}
