<?php

$url = currentUrl();

$routes = require "routes.php";

mapRoute($url, $routes);

function mapRoute($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require($routes[$url]);
    } else {
        redirectTo();
    }
}

function abort($code = Request::NOT_FOUND) {
    http_response_code($code);

    require("views/codes/{$code}.view.php");
    die();
}