<?php


$user_id = 1;

$db = new Core\Database();
$notes = $db->prepare("SELECT * FROM `notes` WHERE user_id=:user_id", ['user_id' => $user_id])->all();

view('notes/index.view.php', [
    'title' => 'Notes',
    'notes' => $notes
]);