<?php
$title = "Create a Note";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (strlen(trim($_POST['title'])) === 0) {
        $errors['title'] = "the title field is required";
    }

    if (strlen(trim($_POST['title'])) > 200) {
        $errors['title'] = " title field might not exceed 200 characters";
    }

    if (strlen(trim($_POST['body'])) === 0) {
        $errors['body'] = "the body field is required";
    }

    if (strlen(trim($_POST['body'])) > 1000) {
        $errors['body'] = " body field might not exceed 1000 characters";
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

require('views/note-create.view.php');