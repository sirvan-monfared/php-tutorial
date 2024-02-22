<?php
$url = currentUrl();

$routes = require(base_path('routes.php'));

mapRoute($url, $routes);

function mapRoute($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require base_path($routes[$url]);
    } else {
        redirectTo();
    }
}

function abort($code = Core\Request::NOT_FOUND) {
    http_response_code($code);

    view("codes/{$code}.view.php");
    die();
}