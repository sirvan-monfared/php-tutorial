<?php
namespace Models;

use Core\Database;

class Model {

    protected $table = '';


    public function all()
    {
        $db = new Database();


        return $db->prepare("SELECT * FROM `{$this->table}`", class: get_called_class())->all();
    }

    public function findOrFail($id)
    {
        $db = new Database();

        $post = $db->prepare("SELECT * FROM `{$this->table}` WHERE id=:id", ['id' => $id], get_called_class())->findOrFail();

        return $post;
    }

    public function find($id)
    {
        $db = new Database();

        return $db->prepare("SELECT * FROM `{$this->table}` WHERE id=:id", ['id' => $id], get_called_class())->find();
    }
}