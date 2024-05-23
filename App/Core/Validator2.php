<?php
namespace App\Core;

class Validator2 {

    public static function string($value, $min = 1, $max = INF): bool
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function phone($value): bool
    {
        return strlen($value) === 11;
    }

    public static function matches(string $first_value, string $second_value): bool
    {
        return $first_value === $second_value;
    }
}