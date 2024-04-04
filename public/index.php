<?php

use Core\Session;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "vendor/autoload.php";

session_start();

require BASE_PATH . "functions.php";


$url = currentUrl();

$router = new Core\Router();

require(base_path('routes.php'));

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($url, $method);

Session::unflash();