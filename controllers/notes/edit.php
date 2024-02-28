<?php
$id = $_GET['id'];

$user_id = 1;

$db = new Core\Database();
$note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
    'id' => $id
])->findOrFail();

authorize(intval($note['user_id']) === $user_id);

view('notes/edit.view.php', [
    'title' => 'Edit a Note',
    'note' => $note,
    'errors' => []
]);