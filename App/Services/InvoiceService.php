<?php

namespace App\Services;

class InvoiceService
{
    public function __construct(
        public SalesTaxService $salesTaxService,
        public PaymentGatewayService $gatewayService,
        public EmailService $emailService
    ){}

    public function process(array $customer, int $amount): bool
    {
        // 1. calculate sales tax
        $tax = $this->salesTaxService->calculate($amount);

        // 2. process invoice
        if (! $this->gatewayService->charge($customer, $amount, $tax)) {
            return false;
        }

        // 3. send receipt
        $this->emailService->send($customer, 'receipt');

        return true;
    }
}