<?php

$id = $_GET['id'];

$user_id = 1;

$db = new Core\Database();
$note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
    'id' => $id
])->findOrFail();

authorize(intval($note['user_id']) === $user_id);


if (! Core\Validator::string($_POST['title'], 1, 200)) {
    $errors['title'] = "a title of a max of 200 characters is required";
}

if (! Core\Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "a body of a max of 1000 characters is required";
}

if (empty($errors)) {
    $db->prepare("UPDATE `notes` SET title=:title, body=:body WHERE id=:id", [
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'id' => $note['id']
    ]);

    redirectTo("/notes/edit?id={$note['id']}");
}