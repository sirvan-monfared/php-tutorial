<?php

namespace Http\Forms;

use Core\Session;
use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($email, $password)
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'please provide a valida email address';
        }

        if (!Validator::string($password, 5, 255)) {
            $this->errors['password'] = 'your password should be at least 5 characters';
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
