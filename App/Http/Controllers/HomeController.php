<?php

namespace App\Http\Controllers;

use App\Core\App;
use App\Services\InvoiceService;

class HomeController extends BaseController
{
    public function __construct(public InvoiceService $invoiceService) {
        parent::__construct();
    }

    // Dependency Injection
    public function index(): void
    {
        $result = $this->invoiceService->process(['id' => 12, 'name' => 'sirvan', 'age' => 19], 100000);

        echo $result ? "finished" : "failed";
    }
}
