<?php
$title = "Notes";

$user_id = 1;

$db = new Database();
$notes = $db->prepare("SELECT * FROM `notes` WHERE user_id=:user_id", ['user_id' => $user_id])->fetchAll();

require("./views/notes.view.php");