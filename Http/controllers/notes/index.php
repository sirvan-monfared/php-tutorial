<?php

use Models\Note;

$user_id = 1;

$notes = (new Note)->forUser($user_id);

view('notes/index.view.php', [
    'title' => 'Notes',
    'notes' => $notes
]);