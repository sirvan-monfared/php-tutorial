<?php

namespace Models;

use Core\Database;

class Note extends Model {
    protected $table = 'notes';


    public function forUser($id)
    {
        $db = new Database();
        
        return $db->prepare("SELECT * FROM `notes` WHERE user_id=:user_id", ['user_id' => $id], __CLASS__)->all();
    }
}