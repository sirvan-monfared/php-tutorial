<?php
require("./functions.php");

$url = substr($_SERVER['REQUEST_URI'], strlen("/php-tutorial"));

$routes = [
    '/'         => './controllers/index.php',
    '/about-us' => './controllers/about.php',
    '/contact'  => './controllers/contact.php'
];


if (array_key_exists($url, $routes)) {
    require($routes[$url]);
} else {
    
}

// if(isUrl("/")) {
//     require("./controllers/index.php");
// } elseif (isUrl("/about-us")) {
//     require("./controllers/about.php");
// } elseif (isUrl("/contact")) {
//     require("./controllers/contact.php");
// }

// switch($url) {
//     case '/':
//         require("./controllers/index.php");
//      
//         break;
//     case '/about-us':
//         require("./controllers/about.php");
//         break;
//     case '/contact':
//         require("./controllers/contact.php");
//         break;
// }

// match ($url) {
//     '/' => require("./controllers/index.php"),
//     '/about-us' => require("./controllers/about.php"),
//     '/contact' => require("./controllers/contact.php")
// };