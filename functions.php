<?php

use Core\Request;
use Core\Session;

function currentUrl()
{

    $url = parse_url($_SERVER['REQUEST_URI']);

    return $url['path'];
}

function isUrl($url)
{
    return currentUrl() === $url;
}

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();
}

function redirectTo($url = '/')
{
    header("location: $url");
    exit();
}

function e($value)
{
    return htmlspecialchars($value);
}

function authorize($condition, $status = Core\Request::ACCES_DENIED)
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

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout()
{
    Session::destroy();
}
