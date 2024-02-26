<?php 
$user_id = 1;

$db = new Core\Database();
$note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
    'id' => $_GET['id']
])->findOrFail();

authorize(intval($note['user_id']) === $user_id);

$db->prepare("DELETE FROM `notes` WHERE id=:id", [
    'id' =>$note['id']
]);

redirectTo('/notes');