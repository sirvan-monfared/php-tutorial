<?php

namespace Core\Middlewares;

use Core\Middlewares\Guest;
use Core\Middlewares\Auth;

class Middleware {

    const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class
    ];


    public static function handle($key) 
    {
        if (! $key) {
            return;
        }
        
        $middleware = self::MAP[$key];
        if (! $middleware) {
            return;
        }

        (new $middleware)->handle();
    }
}