<?php

use App\Core\Authenticator;
use App\Core\Session;
use App\Core\Router;
use App\Helpers\Cart;

//error_reporting(E_ALL);
//ini_set('display_errors', '1');
ini_set("display_errors", 0);

const BASE_PATH = __DIR__ . '/../';
const SITE_URL = 'https://laracommerce.test/';

//ini_set('display_errors', 0);

require BASE_PATH . "vendor/autoload.php";

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();


require BASE_PATH . "functions.php";

$cart = new Cart;

$url = currentUrl();

(new Authenticator())->check();

$router = new Router();

require(base_path('routes/routes.php'));

$router->match(httpRequestMethod());

Session::unflash();