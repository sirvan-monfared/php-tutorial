<?php

namespace App\Http\Forms;

use App\Core\Session;
use App\Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($phone, $password): bool
    {
        if (!Validator::phone($phone)) {
            $this->errors['phone'] = 'لطفا شماره تلفن معتبر ارسال کنید';
        }

        if (!Validator::string($password, 5, 255)) {
            $this->errors['password'] = 'رمزعبور حداقل باید 5 کاراکتر باشد';
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }
}
