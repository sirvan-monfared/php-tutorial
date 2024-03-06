<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();

if ($form->validate($email, $password)) {

    if ((new Authenticator)->attempt($email, $password)) {
        redirectTo('/');
    } else {
        $form->error('email', 'Sorry but we couldn\'t find a user with provided credentials');
    }
}

Session::flash('errors', $form->errors());
Session::flash('old', [
    'email' => $email
]);

redirectTo('/login');

