<?php

namespace App\Http\Controllers\Dashboard;

use App\Core\Session;
use App\Core\Validator;
use App\Http\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function edit()
    {
        $this->view('dashboard.profile.edit', [
            'user' =>auth()->user()
        ]);
    }

    public function update()
    {
        $validation = new Validator($_POST, [
            'name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['email'],
            'address' => ['required', 'min: 5']
        ], [
            'name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'email' => 'آدرس ایمیل',
            'address' => 'آدرس ارسال سفارشات',
        ]);

        if ($validation->failed()) {
            $this->redirectToForm($validation);
        }

        auth()->user()->updateInfo($_POST);

        Session::success();
        redirectBack();
    }
}