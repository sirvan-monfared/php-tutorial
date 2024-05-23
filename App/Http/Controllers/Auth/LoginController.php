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
        $this->view('front.auth.login');
    }

    public function store(): void
    {
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $remember = !!$_POST['remember'];

        $form = new LoginForm();

        if ($form->validate($phone, $password)) {

            if ((new Authenticator)->attempt($phone, $password, $remember)) {

                redirectTo('/');
            } else {
                $form->error('phone', 'شماره تلفن و رمزعبور ارسال شده مطابقت ندارند');
            }
        }

        Session::flash('errors', $form->errors());
        Session::flash('old', [
            'phone' => $phone
        ]);

        redirectTo('/login');
    }

    public function logout(): void
    {
        (new Authenticator)->logout();

        redirectTo('/');
    }
}
