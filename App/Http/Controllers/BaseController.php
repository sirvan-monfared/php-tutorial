<?php

namespace App\Http\Controllers;

use App\Composers\CategoriesComposer;
use App\Core\Session;
use App\Core\Validator;
use App\Models\Category;
use eftec\bladeone\BladeOne;

class BaseController {

    protected $blade;

    public function __construct()
    {
        if (httpRequestMethod() !== 'GET' && ! verify_csrf()) {
            Session::warning('نشست شما منقضی شده است');
            redirectBack();
        }

        $this->blade = new BladeOne(base_path('views'), base_path('storage/cache'), BladeOne::MODE_DEBUG);

        $this->setComposers();
    }

    protected function view($view, $params = []): void
    {
        echo $this->blade
            ->share([
                'errors' => Session::get('errors', [])
            ])
            ->run($view, $params);
    }

    protected function redirectToForm(Validator $validator): void
    {
        Session::flash('errors', $validator->errors());
        Session::flash('old', $_POST);
        Session::warning();

        redirectBack();
    }

    protected function setComposers(): void
    {
        $this->blade->composer('front.layouts._top_categories', CategoriesComposer::class);
    }

}