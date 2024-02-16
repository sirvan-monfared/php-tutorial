<?php
$title = "Create a Note";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $db = new Database();
    $db->prepare("INSERT INTO `notes` (title, body, user_id) VALUES (:title, :body, :user_id)", [
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

}

require('views/note-create.view.php');