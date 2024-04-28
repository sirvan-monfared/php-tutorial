<?php

namespace App\Http\Forms;

use App\Core\Validator;

class RegisterForm
{
    protected array $errors = [];

    public function validate(array $data): bool
    {
        if (!Validator::phone($data['phone'])) {
            $this->errors['phone'] = 'لطفا شماره تلفن معتبر ارسال کنید';
        }

        if (!Validator::string($data['password'], 5, 255)) {
            $this->errors['password'] = 'رمزعبور حداقل باید 5 کاراکتر باشد';
        }

        if (!Validator::matches($data['password'], $data['password_confirmation'])) {
            $this->errors['password_confirmation'] = 'رمزعبور و تکرار آن مطابقت ندارند';
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