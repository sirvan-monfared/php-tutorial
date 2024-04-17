<?php

namespace App\Http\Controllers;

class HomeController extends BaseController
{
    public function index(): void
    {
        $this->view('front.home');
    }
}