<?php

use Core\Authenticator;
use Core\Database;
use Core\Session;
use Core\Validator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();

if ($form->validate($email, $password)) {
    $db = new Database();
    $user = $db->prepare("SELECT * FROM `users` WHERE email=:email", [
        'email' => $email
    ])->find();

    if ($user) {
        redirectTo('/login');
    }

    $db->prepare('INSERT INTO `users` (`email`, `password`, `name`) VALUES (:email, :password, :name)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'name' => ''
    ]);


    (new Authenticator)->login([
        'email' => $email
    ]);

    redirectTo('/');
}

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $email
]);

redirectTo('/register');


// 2. check for currently registered user
