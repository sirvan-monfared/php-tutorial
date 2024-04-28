<?php

namespace App\Http\Controllers\Auth;

use App\Core\Authenticator;
use App\Core\Database;
use App\Core\Session;
use App\Http\Controllers\BaseController;
use App\Http\Forms\LoginForm;
use App\Http\Forms\RegisterForm;
use App\Models\User;

class RegisterController extends BaseController
{
    public function create(): void
    {
        $this->view('front.auth.register');
    }

    public function store(): void
    {
        $form = new RegisterForm();

        if ($form->validate($_POST)) {

            $user = (new User)->byPhone($_POST['phone']);

            if ($user) {
                Session::flash('errors', [
                    'phone' => 'شماره تلفن وارده شده قبلا در سایت ثبت نام کرده است'
                ]);

                redirectBack();
            }

            (new User)->insert($_POST);


            (new Authenticator)->login((object) [
                'phone' => $_POST['phone']
            ]);

            redirectTo('/');
        }

        Session::flash('errors', $form->errors());
        Session::flash('old', [
            'phone' => $_POST['phone']
        ]);

        redirectBack();
    }
}
