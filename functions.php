<?php

function isUrl($url) {
    return substr($_SERVER['REQUEST_URI'], strlen("/php-tutorial")) === $url;
}

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();
}