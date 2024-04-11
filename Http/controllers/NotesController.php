<?php

namespace Http\controllers;

use Core\Database;
use Core\Validator;
use Models\Note;

class NotesController
{

    public function index()
    {
        $user_id = 1;

        $notes = (new Note)->forUser($user_id);

        view('notes/index.view.php', [
            'title' => 'Notes',
            'notes' => $notes
        ]);
    }

    public function show($id)
    {
        $user_id = 1;

        $note = (new Note)->findOrFail($id);

        authorize(intval($note->user_id) === $user_id);

        view('notes/show.view.php', [
            'title' => 'Note',
            'note' => $note
        ]);
    }

    public function create()
    {
        view('notes/create.view.php', [
            'title' => 'Create a Note',
            'errors' => []
        ]);
    }

    public function store()
    {
        $errors = [];

        if (!Validator::string($_POST['title'], 1, 200)) {
            $errors['title'] = "a title of a max of 200 characters is required";
        }

        if (!Validator::string($_POST['body'], 1, 1000)) {
            $errors['body'] = "a body of a max of 1000 characters is required";
        }

        if (empty($errors)) {
            $db = new Database();
            $db->prepare("INSERT INTO `notes` (title, body, user_id) VALUES (:title, :body, :user_id)", [
                'title' => $_POST['title'],
                'body' => $_POST['body'],
                'user_id' => 1
            ]);
        }

        redirectTo('/notes/create');
    }

    public function edit($id)
    {
        $user_id = 1;

        $db = new Database();
        $note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
            'id' => $id
        ])->findOrFail();

        authorize(intval($note['user_id']) === $user_id);

        view('notes/edit.view.php', [
            'title' => 'Edit a Note',
            'note' => $note,
            'errors' => []
        ]);
    }

    public function update($id)
    {
        $user_id = 1;

        $db = new Database();
        $note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
            'id' => $id
        ])->findOrFail();

        authorize(intval($note['user_id']) === $user_id);


        if (!Validator::string($_POST['title'], 1, 200)) {
            $errors['title'] = "a title of a max of 200 characters is required";
        }

        if (!Validator::string($_POST['body'], 1, 1000)) {
            $errors['body'] = "a body of a max of 1000 characters is required";
        }

        if (empty($errors)) {
            $db->prepare("UPDATE `notes` SET title=:title, body=:body WHERE id=:id", [
                'title' => $_POST['title'],
                'body' => $_POST['body'],
                'id' => $note['id']
            ]);

            redirectTo(route('notes.edit', ['id' => $note['id']]));
        }
    }

    public function destroy($id)
    {
        $user_id = 1;

        $db = new Database();
        $note = $db->prepare("SELECT * FROM `notes` WHERE id=:id", [
            'id' => $id
        ])->findOrFail();

        authorize(intval($note['user_id']) === $user_id);

        $db->prepare("DELETE FROM `notes` WHERE id=:id", [
            'id' => $note['id']
        ]);

        redirectTo('/notes');
    }
}
