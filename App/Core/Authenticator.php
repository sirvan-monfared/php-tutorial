<?php

namespace App\Core;

use App\Core\Database;
use App\Models\User;

class Authenticator
{
    public function attempt($phone, $password): bool
    {
        $user = (new User)->byPhone($phone);

        if ($user && password_verify($password, $user->password)) {
            $this->login($user);

            return true;
        }

        return false;
    }

    public function check(): bool
    {
        return Session::has('user');
    }

    public function username(): string|null
    {
        return $this->check() ? Session::get('user')['phone'] : null;
    }


    public function login($user): void
    {
        $_SESSION['user'] = [
            'phone' => $user->phone
        ];

        session_regenerate_id(true);
    }

    public function logout(): void
    {
        Session::destroy();
    }
}
