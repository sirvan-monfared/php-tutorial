<?php

namespace App\Http\Controllers\Auth;

use App\Core\Authenticator;
use App\Core\Session;
use App\Http\Controllers\BaseController;
use App\Http\Forms\LoginForm;

class LoginController extends BaseController
{

    public function create(): void
    {
        $this->view('front.auth.login', [
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
