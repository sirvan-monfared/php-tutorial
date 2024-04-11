<?php

use Http\controllers\Auth\LoginController;
use Http\controllers\Auth\RegisterController;
use Http\controllers\NotesController;
use Http\controllers\PagesController;
use Http\controllers\PostsController;


$router->get('/', [PostsController::class, 'index'], 'home');
$router->get('/post/[i:id]', [PostsController::class, 'show'], 'posts.show');

$router->get('/about-us', [PagesController::class, 'about']);
$router->get('/contact', [PagesController::class, 'contact']);


$router->get('/notes', [NotesController::class, 'index'], 'notes.index')->only('auth');
$router->post('/notes', [NotesController::class, 'store'], 'notes.store')->only('auth');
$router->get('/notes/create', [NotesController::class, 'create'], 'notes.create')->only('auth');


$router->get('/notes/[i:id]', [NotesController::class, 'show'], 'notes.show')->only('auth');
$router->delete('/notes/[i:id]', [NotesController::class, 'destroy'], 'notes.delete')->only('auth');
$router->get('/notes/[i:id]/edit', [NotesController::class, 'edit'], 'notes.edit')->only('auth');
$router->patch('/notes/[i:id]', [NotesController::class, 'update'], 'notes.update')->only('auth');


$router->get('/register', [RegisterController::class, 'create'])->only('guest');
$router->post('/register', [RegisterController::class, 'store'])->only('guest');


$router->get('/login', [LoginController::class, 'create'])->only('guest');
$router->post('/login', [LoginController::class, 'store'])->only('guest');
$router->delete('/login', [LoginController::class, 'logout'])->only('auth');