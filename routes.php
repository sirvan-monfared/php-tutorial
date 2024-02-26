<?php

$router->get('/', '/controllers/index.php');
$router->get('/about-us', '/controllers/about.php');
$router->get('/contact', '/controllers/contact.php');
$router->get('/post', '/controllers/post.php');
$router->get('/notes', '/controllers/notes/index.php');
$router->get('/notes/show', '/controllers/notes/show.php');
$router->get('/notes/create', '/controllers/notes/create.php');
$router->post('/notes/create', '/controllers/notes/store.php');
$router->get('/notes/edit', '/controllers/notes/edit.php');
$router->delete('/notes/destroy', '/controllers/notes/destroy.php');

