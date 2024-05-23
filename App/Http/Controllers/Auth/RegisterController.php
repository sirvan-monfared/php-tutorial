<?php

namespace App\Http\Controllers\Auth;

use App\Core\Authenticator;
use App\Core\Database;
use App\Core\Session;
use App\Core\Validator;
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
        $validation = new Validator($_POST, [
            'phone' => ['required', 'exact:11', 'mobile'],
            'password' => ['required', 'min:3', 'max:12'],
            'password_confirmation' => ['confirm:password']
        ], [
            'phone' => 'شماره موبایل',
            'password' => 'رمزعبور',
            'password_confirmation' => 'تکرار رمز عبور'
        ]);

        if ($validation->passed()) {

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

        Session::flash('errors', $validation->errors());
        Session::flash('old', [
            'phone' => $_POST['phone']
        ]);

        redirectBack();
    }
}
