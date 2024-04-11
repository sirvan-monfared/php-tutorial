<?php

use Models\Note;

$id = $_GET['id'];

$db = new Core\Database();

$user_id = 1;

$note = (new Note)->findOrFail($id);

authorize(intval($note->user_id) === $user_id);

view('notes/show.view.php', [
    'title' => 'Note',
    'note' => $note
]);
