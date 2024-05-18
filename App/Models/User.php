<?php

namespace App\Models;

class User extends Model
{
    protected string $table = 'users';

    public function byPhone(string $phone): static
    {
        return $this->where('phone', $phone);
    }

    public function byToken($token)
    {
        return $this->where('token', $token);
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

    public function setRememberToken(string $token): User
    {
        return $this->update([
           'token' => $token
        ]);
    }

    public function deleteToken(): User
    {
        return $this->update([
            'token' => null
        ]);
    }
}