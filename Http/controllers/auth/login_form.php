<?php

use Core\Session;

view('auth/login_form.view.php', [
    'title' => 'Login',
    'errors' => Session::get('errors', [])
]);