<?php

namespace Http\controllers\Auth;

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

class LoginController
{

    public function create()
    {
        view('auth/login_form.view.php', [
            'title' => 'Login',
            'errors' => Session::get('errors', [])
        ]);
    }

    public function store()
    {
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
    }

    public function logout()
    {
        (new Authenticator)->logout();

        redirectTo('/');
    }
}
