<?php

namespace Core;

class Router {

    public $routes = [];

    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }

    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }

    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }

    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }

    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }

    public function route($url, $method) {
        foreach($this->routes as $route) {
            if ($url === $route['uri'] && $method === $route['method']) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    public function abort($code = Request::NOT_FOUND) {
        http_response_code($code);
    
        view("codes/{$code}.view.php");
        die();
    }
}


// function mapRoute($url, $routes)
// {
//     if (array_key_exists($url, $routes)) {
//         require base_path($routes[$url]);
//     } else {
//         redirectTo();
//     }
// }

function abort($code = Core\Request::NOT_FOUND) {
    http_response_code($code);

    view("codes/{$code}.view.php");
    die();
}