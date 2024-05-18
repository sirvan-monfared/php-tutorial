<?php

use App\Core\Authenticator;
use App\Core\Session;
use App\Core\Router;
use App\Helpers\Cart;

const BASE_PATH = __DIR__ . '/../';
const SITE_URL = 'https://laracommerce.test/';

require BASE_PATH . "vendor/autoload.php";

session_start();

require BASE_PATH . "functions.php";

$cart = new Cart;

$url = currentUrl();

(new Authenticator())->check();

$router = new Router();

require(base_path('routes/routes.php'));

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->match($method);

Session::unflash();