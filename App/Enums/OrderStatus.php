<?php

namespace App\Enums;

enum OrderStatus: int
{
    case NOT_PAID = 1;
    case PAID = 2;
    case FAILED = 3;

    public function translate(): string
    {
        return match($this) {
            self::NOT_PAID => 'در انتظار پرداخت',
            self::PAID => 'پرداخت شده',
            self::FAILED => 'پرداخت ناموفق'
        };
    }

    public function cssClass(): string
    {
        return match($this) {
            self::NOT_PAID => 'warning',
            self::PAID => 'success',
            self::FAILED => 'danger',
        };
    }
}
