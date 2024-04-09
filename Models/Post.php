<?php
namespace Models;

use Core\Database;

class Post {
    public $id;
    public $title;
    public $body;

    public function all()
    {
        $db = new Database();

        return $db->prepare("SELECT * FROM `posts`", class: __CLASS__)->all();
    }

    public function findOrFail($id)
    {
        $db = new Database();

        $post = $db->prepare("SELECT * FROM `posts` WHERE id=:id", ['id' => $id], __CLASS__)->findOrFail();

        return $post;
    }

    public function find($id)
    {
        $db = new Database();

        return $db->prepare("SELECT * FROM `posts` WHERE id=:id", ['id' => $id], __CLASS__)->find();
    }

    public function sluggify()
    {
        return str_replace(' ', '-', $this->title);
    }

}