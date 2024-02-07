<?php

$url = currentUrl();

$routes = [
    '/'         => './controllers/index.php',
    '/about-us' => './controllers/about.php',
    '/contact'  => './controllers/contact.php',
    '/post'     => './controllers/post.php',
    '/notes'    => './controllers/notes.php',
    '/note'     => './controllers/note.php',
    '/not-found' => './controllers/not-found.php',
    '/not-authorized' => './controllers/not-authorized.php',
];

mapRoute($url, $routes);

function mapRoute($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require($routes[$url]);
    } else {
        redirectTo();
    }
}