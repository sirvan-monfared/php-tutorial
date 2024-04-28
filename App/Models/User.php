<?php

namespace App\Models;

class User extends Model
{
    protected string $table = 'users';

    public function byPhone(string $phone)
    {
        return $this->db->prepare("SELECT * FROM `users` WHERE phone=:phone", [
            'phone' => $phone
        ], __CLASS__)->find();
    }
}