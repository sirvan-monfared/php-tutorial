<?php

use App\Core\Authenticator;
use App\Core\CSRF;
use App\Core\Request;
use App\Core\Session;
use App\Helpers\Cart;
use eftec\bladeone\BladeOne;

function currentUrl()
{
    $url = parse_url($_SERVER['REQUEST_URI']);

    return $url['path'];
}

function isUrl($url)
{
    return currentUrl() === $url;
}

if (!function_exists('dd')) {
    function dd($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";

        die();
    }
}


function redirectTo($url = '/'): void
{
    header("location: $url");
    exit();
}

function redirectBack(): void
{
    redirectTo($_SERVER['HTTP_REFERER'] ?? route('home'));
}

function e($value)
{
    return htmlspecialchars($value);
}

function authorize($condition, $status = Request::ACCES_DENIED)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $params = [])
{
    extract($params);

    require base_path('views/' . $path);
}

function abort($code = Request::NOT_FOUND)
{
    http_response_code($code);

    view("codes/{$code}.view.php");
    die();
}

function old($key, $default = '')
{
    return Session::get('old')[$key] ?? $default;
}

function route(string $route_name, ?array $params = []): string
{
    global $router;

    return $router->route($route_name, $params);
}

function asset($path): string
{
    return SITE_URL . "assets/$path";
}

function cart(): Cart
{
    global $cart;

    return $cart;
}

function priceFormat($price): string
{
    return number_format($price) . " تومان";
}

function str_limit($str, $limit): string
{
    if (strlen($str) > $limit) {
        return mb_substr($str, 0, $limit) . ' ...';
    }

    return $str;
}

function now($format = 'Y-m-d H:i:s'): string
{
    return date($format);
}

function auth(): Authenticator
{
    return new Authenticator;
}

function url($route_name, $params = []): string
{
    return rtrim(SITE_URL, '/') . route($route_name, $params);
}

function generateRandom($length = 20): string
{
    return bin2hex(random_bytes($length));
}

function env(string $key, $default = ''): string
{
    return $_ENV[$key] ?? $default;
}

function httpRequestMethod(): ?string
{
    return $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
}

function csrf_token(): string
{
    return CSRF::token();
}

function routeIs(string $route_name): bool
{
    return route($route_name) === currentUrl();
}

function uploadImage($field_name): bool|string
{
    $file = $_FILES[$field_name];

    $error = $file['error'];

//    if ($error === UPLOAD_ERR_NO_FILE) {
//        dd('هیچ فایلی آپلود نشده است');
//    }

    if ($error !== UPLOAD_ERR_OK) {
        dd('مشکلی در آپلود به وجود آمده است');
    }

    $info = pathinfo($file['name']);
    $extension = $info['extension'];

    if (! in_array($extension, ['jpg', 'jpeg', 'png', 'avif']) || ! getimagesize($file['tmp_name'])) {
        dd('فقط میتوانید تصویر آپلود کنید');
    }

    $new_name = time() . rand(500, 10000) . '.' . $extension;
    $path = base_path('public/assets/uploads/') . $new_name;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        return $new_name;
    }

    return false;
}

function shamsi($date, $format = 'Y/m/d'): string
{
    return jdate($date)->format($format);
}

function blade(): BladeOne
{
    return new BladeOne(base_path('views'), base_path('storage/cache'), BladeOne::MODE_DEBUG);
}