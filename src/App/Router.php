<?php

namespace Aryan\CpAntara\App;

class Router
{
  private static array $routes = [];

  public static function add(string $method, string $path, string $controller, string $function, array $middlewares = []): void
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
    $path = "/";

    if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
    $method = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route) {
      $pattern = "#^" . $route['path'] . "$#";
      if (preg_match($pattern, $path, $variables) && $method == $route['method']) {

        // Call controller
        $controller = new $route['controller'];
        $function = $route['function'];

        array_shift($variables); // Menghapus full path
        call_user_func_array([$controller, $function], $variables);

        return;
      }
    }

    http_response_code(404);
    // echo '404 Not Found';
    include __DIR__ . '/404.php';
  }
}
