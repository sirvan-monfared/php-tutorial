<?php

namespace Models;

use Core\Database;

class Note {
    public function all()
    {
        $db = new Database();

        return $db->prepare("SELECT * FROM `notes`")->all();
    }

    public function forUser($id)
    {
        $db = new Database();
        
        return $db->prepare("SELECT * FROM `notes` WHERE user_id=:user_id", ['user_id' => $id])->all();
    }
}