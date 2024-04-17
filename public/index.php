<?php

use App\Core\Session;
use App\Core\Router;

const BASE_PATH = __DIR__ . '/../';
const SITE_URL = 'http://laracommerce.test/';

require BASE_PATH . "vendor/autoload.php";

session_start();

require BASE_PATH . "functions.php";


$url = currentUrl();

$router = new Router();

require(base_path('routes.php'));

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->match($method);

Session::unflash();