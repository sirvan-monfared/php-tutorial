<?php

function currentUrl() {

    $url = parse_url($_SERVER['REQUEST_URI']);
    
    return $url['path'];
}

function isUrl($url) {
    return currentUrl() === $url;
}

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();
}

function redirectTo($url = PROJECT_URL) {
    header("location: $url");
    exit();
}

function e($value) {
    return htmlspecialchars($value);
}

function authorize($condition, $status = Request::ACCES_DENIED)
{
    if (! $condition) {
        abort($status);
    }
}