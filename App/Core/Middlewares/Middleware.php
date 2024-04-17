<?php

namespace App\Core\Middlewares;

use App\Core\Middlewares\Guest;
use App\Core\Middlewares\Auth;

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