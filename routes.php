<?php
$router->get('/', '/controllers/index.php');
$router->get('/about-us', '/controllers/about.php');
$router->get('/contact', '/controllers/contact.php');
$router->get('/post', '/controllers/post.php');

$router->get('/notes', '/controllers/notes/index.php');

$router->post('/notes', '/controllers/notes/store.php');
$router->get('/notes/create', '/controllers/notes/create.php');

$router->get('/notes/show', '/controllers/notes/show.php');
$router->delete('/notes/show', '/controllers/notes/destroy.php');
$router->patch('/notes/show', '/controllers/notes/update.php');

$router->get('/notes/edit', '/controllers/notes/edit.php');

$router->get('/register', 'controllers/auth/create.php');
$router->post('/register', 'controllers/auth/store.php');


