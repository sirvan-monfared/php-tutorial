<?php

namespace App\Services;

class PaymentGatewayService
{
    public function __construct(protected LoggerService $loggerService)
    {

    }
    public function charge(array $customer, int $amount, float|int $tax): bool
    {
        return (bool) mt_rand(0, 1);
    }
}