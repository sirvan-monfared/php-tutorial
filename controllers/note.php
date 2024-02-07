<?php
$title = "Note";

$id = $_GET['id'];

$db = new Database();

$note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", ['id' => $id])->fetch();

require("views/note.view.php");