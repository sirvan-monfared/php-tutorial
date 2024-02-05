<?php

function currentUrl() {

    $url = parse_url($_SERVER['REQUEST_URI']);
    
    return substr($url['path'], strlen("/php-tutorial"));
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
