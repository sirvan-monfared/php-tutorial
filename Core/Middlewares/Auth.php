<?php

namespace Core\Middlewares;

class Auth {

    public function handle()
    {
        if (! $_SESSION['user'] ?? false) {
            redirectTo('/register');
        }
    }

}