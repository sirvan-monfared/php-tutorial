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
}