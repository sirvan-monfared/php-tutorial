<?php

namespace App\Http\Controllers;

use App\Composers\CategoriesComposer;
use App\Core\Session;
use App\Models\Category;
use eftec\bladeone\BladeOne;

class BaseController {

    protected $blade;

    public function __construct()
    {
        $this->blade = new BladeOne(base_path('views'), base_path('storage/cache'), BladeOne::MODE_DEBUG);

        $this->setComposers();
    }

    protected function view($view, $params = [])
    {
        echo $this->blade
            ->share([
                'errors' => Session::get('errors', [])
            ])
            ->run($view, $params);
    }

    protected function setComposers(): void
    {
        $this->blade->composer('front.layouts._top_categories', CategoriesComposer::class);
    }

}