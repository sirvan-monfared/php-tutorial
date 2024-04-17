<?php

namespace App\Http\Controllers;

use eftec\bladeone\BladeOne;

class BaseController {

    protected $blade;

    public function __construct()
    {
        $this->blade = new BladeOne(base_path('views'), base_path('storage/cache'), BladeOne::MODE_DEBUG);
    }

    protected function view($view, $params = [])
    {
        echo $this->blade->run($view, $params);
    }

}