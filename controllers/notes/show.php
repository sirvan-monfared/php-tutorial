<?php
$id = $_GET['id'];

$db = new Database();

$user_id = 1;

$note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
    'id' => $id
])->findOrFail();

authorize(intval($note['user_id']) === $user_id);

view('notes/show.view.php', [
    'title' => 'Note',
    'note' => $note
]);
