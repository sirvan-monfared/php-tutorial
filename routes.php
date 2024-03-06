<?php
$router->get('/', 'index.php');
$router->get('/about-us', 'about.php');
$router->get('/contact', 'contact.php');
$router->get('/post', 'post.php');

$router->get('/notes', 'notes/index.php')->only('auth');

$router->post('/notes', 'notes/store.php')->only('auth');
$router->get('/notes/create', 'notes/create.php')->only('auth');
$router->get('/notes/show', 'notes/show.php')->only('auth');
$router->delete('/notes/show', 'notes/destroy.php')->only('auth');
$router->patch('/notes/show', 'notes/update.php')->only('auth');
$router->get('/notes/edit', 'notes/edit.php')->only('auth');

$router->get('/register', 'auth/create.php')->only('guest');
$router->post('/register', 'auth/store.php')->only('guest');

$router->get('/login', 'auth/login_form.php')->only('guest');
$router->post('/login', 'auth/login.php')->only('guest');
$router->delete('/login', 'auth/logout.php')->only('auth');


