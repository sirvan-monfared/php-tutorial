<?php

namespace App\Models;

class Shipment extends Model
{
    protected string $table = 'shipments';

    const PROCESSING = 1;
    const INVOICE = 2;
    const PREPARATION = 3;
    const SENT = 4;
    const DELIVERED = 5;

    public function revise(array $data): Shipment
    {
        return $this->update([
            'status' => $_POST['status'],
            'address' => $_POST['address']
        ]);
    }

    public function status(): string
    {
        return match ($this->status) {
            self::PROCESSING => 'پردازش سفارش',
            self::INVOICE => 'صدور فاکتور',
            self::PREPARATION => 'آماده سازی',
            self::SENT => 'ارسال شده',
            self::DELIVERED => 'تحویل داده شده',
        };
    }
}