<?php

view('auth/login_form.view.php', [
    'title' => 'Login',
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);