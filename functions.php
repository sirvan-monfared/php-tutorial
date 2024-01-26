<?php

function currentUrl() {
    return substr($_SERVER['REQUEST_URI'], strlen("/php-tutorial"));
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