<?php

namespace App\Core;

use App\Controllers\AuthController;

class Router
{
    public static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function, array $middleware = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middleware
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
            if ($route['middleware'] != null) {
                foreach ($route['middleware'] as $middleware) {
                    call_user_func([$middleware['class'], $middleware['function']], $middleware['args']);
                }
            }

            $controller = new $route['controller'];
            $function = $route['function'];

            array_shift($variables);
            call_user_func_array([$controller, $function], $variables);
            exit;
        }

        if ($is_path_found && !$is_method_found) {
            (new AuthController)->sendPageMethodNotAllowed();
            exit;
        }

        if (!$is_path_found) {
            (new AuthController)->sendPageNotFound();
            exit;
        }
    }
}
