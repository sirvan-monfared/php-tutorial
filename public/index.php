<?php
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "functions.php";

spl_autoload_register(function($class) {

    $class_name = str_replace('\\', '/', $class);

    require_once(base_path("{$class_name}.php"));
});

require base_path('Core/router.php'); 