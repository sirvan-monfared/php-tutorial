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

if (! Validator::string($password)) {
    $errors['password'] = 'please enter your password';
}

if (! empty($errors)) {
    $_SESSION['_flash']['errors'] = $errors;

    redirectTo('/login');
    // return view('auth/login_form.view.php', [
    //     'title' => 'Login',
    //     'errors' => $errors
    // ]);
}


// 2. check for currently registered user

$db = new Database();
$user = $db->prepare("SELECT * FROM `users` WHERE email=:email", [
    'email' => $email
])->find();

if ($user && password_verify($password, $user['password'])) {
    login($user);
    
    redirectTo('/');
}

redirectTo('/login');

// return view('auth/login_form.view.php', [
//     'title' => 'Login',
//     'errors' => [
//         'email' => 'Sorry but we couldn\'t find a user with provided credentials'
//     ]
// ]);








