<?php

namespace App\Services;

class SalesTaxService
{

    public function calculate(int $amount): float|int
    {
        return $amount * 9 / 100;
    }
}