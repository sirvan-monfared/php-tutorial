<?php
$title = "Create a Note";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validator::string($_POST['title'], 1, 200)) {
        $errors['title'] = "a title of a max of 200 characters is required";
    }

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "a body of a max of 1000 characters is required";
    }

    if (empty($errors)) {
        $db = new Database();
        $db->prepare("INSERT INTO `notes` (title, body, user_id) VALUES (:title, :body, :user_id)", [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view('notes/create.view.php', [
    'title' => 'Create a Note',
    'errors' => $errors
]);