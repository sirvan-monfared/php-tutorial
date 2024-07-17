<?php

namespace App\Enums;

enum CommentStatus: int
{
    case PENDING = 1;
    case ACCEPTED = 2;
    case SPAM = 3;
    case REPETITIVE = 4;

    public function translate(): string
    {
        return match($this) {
            self::PENDING => 'در انتظار تایید',
            self::ACCEPTED => 'تایید شده',
            self::SPAM => 'هرزنامه',
            self::REPETITIVE => 'تکراری',
        };
    }

    public function cssClass(): string
    {
        return match($this) {
            self::PENDING => 'warning',
            self::ACCEPTED => 'success',
            self::SPAM => 'danger',
            self::REPETITIVE => 'info',
        };
    }

}
