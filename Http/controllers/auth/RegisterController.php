<?php

namespace Http\controllers\Auth;

use Core\Authenticator;
use Core\Database;
use Core\Session;
use Http\Forms\LoginForm;

class RegisterController
{

    public function create()
    {
        view('auth/create.view.php', [
            'title' => 'Register'
        ]);
    }

    public function store()
    {

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
    }
}
