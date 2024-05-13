<?php

namespace App\Models;

class User extends Model
{
    protected string $table = 'users';

    public function byPhone(string $phone): static
    {
        return $this->db->prepare("SELECT * FROM `{$this->table}` WHERE phone=:phone", [
            'phone' => $phone
        ], __CLASS__)->find();
    }

    public function insert(array $data): ?User
    {
        return $this->create([
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