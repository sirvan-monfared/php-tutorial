<?php

use Http\controllers\Auth\LoginController;
use Http\controllers\Auth\RegisterController;
use Http\controllers\NotesController;
use Http\controllers\PagesController;
use Http\controllers\PostsController;


$router->get('/', [PostsController::class, 'index']);
$router->get('/post', [PostsController::class, 'show']);

$router->get('/about-us', [PagesController::class, 'about']);
$router->get('/contact', [PagesController::class, 'contact']);


$router->get('/notes', [NotesController::class, 'index'])->only('auth');
$router->post('/notes', [NotesController::class, 'store'])->only('auth');
$router->get('/notes/create', [NotesController::class, 'create'])->only('auth');


$router->get('/notes/show', [NotesController::class, 'show'])->only('auth');
$router->delete('/notes/show', [NotesController::class, 'destroy'])->only('auth');
$router->get('/notes/edit', [NotesController::class, 'edit'])->only('auth');
$router->patch('/notes/show', [NotesController::class, 'update'])->only('auth');


$router->get('/register', [RegisterController::class, 'create'])->only('guest');
$router->post('/register', [RegisterController::class, 'store'])->only('guest');


$router->get('/login', [LoginController::class, 'create'])->only('guest');
$router->post('/login', [LoginController::class, 'store'])->only('guest');
$router->delete('/login', [LoginController::class, 'logout'])->only('auth');