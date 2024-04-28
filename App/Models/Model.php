<?php
namespace App\Models;

use App\Core\Database;

class Model {

    protected string $table = '';
    protected Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function all(?int $limit = null)
    {
        $sql = "SELECT * FROM `{$this->table}`";

        if ($limit) {
            $sql .= " LIMIT {$limit}";
        }

        return $this->db->prepare($sql, class: get_called_class())->all();
    }

    public function findOrFail($id)
    {
        return $this->db->prepare("SELECT * FROM `{$this->table}` WHERE id=:id", ['id' => $id], get_called_class())->findOrFail();

    }

    public function find($id)
    {
        return $this->db->prepare("SELECT * FROM `{$this->table}` WHERE id=:id", ['id' => $id], get_called_class())->find();
    }
}