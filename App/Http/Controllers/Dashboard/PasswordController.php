<?php

namespace App\Http\Controllers\Dashboard;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;

class PasswordController extends BaseController
{
    public function edit()
    {
        $this->view('dashboard.password.edit');
    }

    public function update()
    {
        $validation = new Validator($_POST, [
            'old_password' => ['required'],
            'password' => ['required', 'min:3', 'max:12'],
            'password_confirmation' => ['confirm:password']
        ], [
            'old_password' => 'رمزعبور فعلی',
            'password' => 'رمزعبور',
            'password_confirmation' => 'تکرار رمز عبور'
        ]);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        $user = auth()->user();
        if (! password_verify($_POST['old_password'], $user->password)) {
            $validation->addError('old_password', 'رمزعبور فعلی اشتباه است');
            $this->redirectToForm($validation);
        }

        $user->updatePassword($_POST['password']);

        Session::success();
        redirectBack();
    }
}