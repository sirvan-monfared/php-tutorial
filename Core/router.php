<?php

namespace Core;

class Router {

    public $routes = [];


    protected function add($uri, $controller, $method){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key; 
    }

    public function route($url, $method) 
    {
        foreach($this->routes as $route) {
            if ($url === $route['uri'] && $method === $route['method']) {


                if ($route['middleware']) {
                    $class = "Core\\Middlewares\\".ucwords($route['middleware']);

                    if(file_exists(base_path(str_replace('\\', '/', $class)) . '.php')) {
                        (new $class)->handle();
                    };
                }

                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }


    public function abort($code = Request::NOT_FOUND) {
        abort($code);
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