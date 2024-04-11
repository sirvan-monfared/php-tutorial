<?php

namespace Http\controllers;


class PagesController
{

    public function about()
    {
        view('about.view.php', [
            'title' => 'About'
        ]);
    }

    public function contact()
    {
        view('contact.view.php', [
            'title' => 'Contact Us'
        ]);
    }
}
