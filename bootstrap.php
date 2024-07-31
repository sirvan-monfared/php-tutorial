<?php

use App\Core\App;
use App\Core\Container;
use App\Services\EmailService;
use App\Services\InvoiceService;
use App\Services\PaymentGatewayService;
use App\Services\SalesTaxService;
use eftec\bladeone\BladeOne;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

$container = new Container();

$container->bind(ImageManager::class, function() {
    return new ImageManager(new Driver());
});

$container->bind('blade', function() {
    return new BladeOne(base_path('views'), base_path('storage/cache'), BladeOne::MODE_DEBUG);
});

App::setContainer($container);



