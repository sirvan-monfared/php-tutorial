<?php

namespace App\Models;

class Shipment extends Model
{
    protected string $table = 'shipments';

    const PROCESSING = 1;
}