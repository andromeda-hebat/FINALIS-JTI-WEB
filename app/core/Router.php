<?php

namespace App\Core;

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

        $is_path_found = false;
        $is_method_found = false;

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variables)) {
                $is_path_found = true;
                if ($route['method'] == $method) {
                    $is_method_found = true;
                    break;
                }
            }
        }

        if ($is_path_found && $is_method_found) {
            $controller = new $route['controller'];
            $function = $route['function'];

            array_shift($variables);
            call_user_func_array([$controller, $function], $variables);
            return;
        }

        if ($is_path_found && !$is_method_found) {
            http_response_code(405);
            echo "METHOD NOT ALLOWED!";
            return;
        }

        if (!$is_path_found) {
            http_response_code(404);
            echo "CONTROLLER NOT FOUND!";
            return;
        }
    }
}
