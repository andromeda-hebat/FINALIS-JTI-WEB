<?php

namespace App\Core;

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/Model.php';

class Router {

    public static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function): void {
        self::$routes[] = [
            'method'=>$method,
            'path'=>$path,
            'controller'=>$controller,
            'function'=>$function
        ];
    }

    public static function run(): void {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if ($route['method'] == $method && preg_match($pattern, $path, $variables)) {
                $controller = new $route['controller'];
                $function = $route['function'];

                array_shift($variables);
                call_user_func_array([ $controller, $function ], $variables);
                return;
            }
        }

        // Handle method not found
        http_response_code(404);
        echo "CONTROLLER NOT FOUND!";
    }
}
