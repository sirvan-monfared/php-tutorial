<?php
$title = "Note";

$id = $_GET['id'];

$db = new Database();

$user_id = 1;

$note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
    'id' => $id
])->findOrFail();

authorize(intval($note['user_id']) === $user_id);

require("views/note.view.php");