<?php

namespace Core;

use Core\Middlewares\Middleware;

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

                Middleware::handle($route['middleware']);

                return require base_path('Http/controllers/'. $route['controller']);
            }
        }

        $this->abort();
    }


    public function abort($code = Request::NOT_FOUND) {
        abort($code);
    }
}