<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $this->view('admin.home');
    }
}