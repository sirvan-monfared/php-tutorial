<?php

namespace App\Core;

use AltoRouter;
use App\Core\Middlewares\Middleware;

class Router {

    protected AltoRouter $router;
    protected array $routes = [];

    public function __construct() 
    {
        $this->router = new AltoRouter();
    }

    protected function add($uri, $controller, $method, $name = null){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null,
            'name' => $name
        ];

        return $this;
    }

    public function get($uri, $controller, $name = null)
    {
        return $this->add($uri, $controller, 'GET', $name);
    }

    public function post($uri, $controller, $name = null)
    {
        return $this->add($uri, $controller, 'POST', $name);
    }

    public function put($uri, $controller, $name = null)
    {
        return $this->add($uri, $controller, 'PUT', $name);
    }

    public function patch($uri, $controller, $name = null)
    {
        return $this->add($uri, $controller, 'PATCH', $name);
    }

    public function delete($uri, $controller, $name = null)
    {
        return $this->add($uri, $controller, 'DELETE', $name);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key; 
    }

    public function match($method) 
    {
        

        foreach($this->routes as $route) {
            $this->router->map($route['method'], $route['uri'], [...$route['controller'], $route['middleware']], $route['name']);
        }

        $match = $this->router->match(requestMethod: $method);

        if (!$match || !is_array($match)) {
            $this->abort();
        }

        $class = $match['target'][0] ?? null;
        $method = $match['target'][1] ?? null;
        $middleware = $match['target'][2] ?? null;
        $params = $match['params'];

        if ($middleware) {
            Middleware::handle($middleware);
        }   

        (new $class)->$method(...$params);
        return;
    }


    public function abort($code = Request::NOT_FOUND) {
        abort($code);
    }

    public function route($name, $params) {
        return $this->router->generate($name, $params);
    }
}