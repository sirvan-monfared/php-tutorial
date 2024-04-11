<?php
namespace Models;

use Core\Database;

class Post extends Model {

    protected $table = 'posts';

    public function sluggify()
    {
        return str_replace(' ', '-', $this->title);
    }

}