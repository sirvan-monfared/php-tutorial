<?php
$title = "Create a Note";

$errors = [];

view('notes/create.view.php', [
    'title' => 'Create a Note',
    'errors' => $errors
]);