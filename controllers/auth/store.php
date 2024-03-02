<?php

use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];


//1. validate

$errors = [];

if (! Validator::email($email)) {
    $errors['email'] = 'please provide a valida email address';
}

if (! Validator::string($password, 5, 255)) {
    $errors['password'] = 'please enter a password of at least 5 characters';
}

if (! empty($errors)) {
    return view('auth/create.view.php', [
        'title' => 'Register',
        'errors' => $errors
    ]);
}


// 2. check for currently registered user

$db = new Database();
$user = $db->prepare("SELECT * FROM `users` WHERE email=:email", [
    'email' => $email
])->find();

// 2-1: if user found -> refirect to login page
if ($user) {
    redirectTo('/');
}

// 2-2: if no user found -> save a user to datbase , login and redirect
$db->prepare('INSERT INTO `users` (`email`, `password`, `name`) VALUES (:email, :password, :name)', [
    'email' => $email,
    'password' => $password,
    'name' => ''
]);


$_SESSION['user'] = [
    'email' => $email
];

redirectTo('/');
