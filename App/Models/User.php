<?php

namespace App\Models;

class User extends Model
{
    protected string $table = 'users';

    public function byPhone(string $phone)
    {
        return $this->db->prepare("SELECT * FROM `{$this->table}` WHERE phone=:phone", [
            'phone' => $phone
        ], __CLASS__)->find();
    }

    public function insert(array $data)
    {
        $sql = "INSERT INTO `{$this->table}` 
                (`name`, `last_name`, `phone`, `password`, `email`, `address`, `created_at`, `updated_at`)
                VALUES 
                (:name, :last_name, :phone, :password, :email, :address, :created_at, :updated_at)";

        $this->db->prepare($sql, [
            'name' => $data['name'] ?? null,
            'last_name' => $data['last_name'] ?? null,
            'phone' => $data['phone'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT),
            'email' => $data['email'] ?? null,
            'address' => $data['address'] ?? null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}