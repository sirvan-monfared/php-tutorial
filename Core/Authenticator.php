<?php

namespace Core;

use Core\Database;

class Authenticator
{
    public function attempt($email, $password)
    {
        $db = new Database();

        $user = $db->prepare("SELECT * FROM `users` WHERE email=:email", [
            'email' => $email
        ])->find();

        if ($user && password_verify($password, $user['password'])) {
            $this->login($user);

            return true;
        }

        return false;
    }


    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}
