<?php
$title = "Note";

$id = $_GET['id'];

$db = new Database();

$user_id = 1;

$note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
    'id' => $id
])->fetch();

if (! $note) {
    redirectTo('/not-found');
}

if (intval($note['user_id']) !== $user_id)  {
    redirectTo('/not-authorized');
}

require("views/note.view.php");