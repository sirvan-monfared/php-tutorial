<?php

namespace App\Models;

class User extends Model
{
    protected string $table = 'users';

    const NAMES = [
        'phone' => 'شماره موبایل',
        'password' => 'رمزعبور',
        'password_confirmation' => 'تکرار رمز عبور'
    ];

    public function rules(bool $with_passwords = true): array
    {
        $rules = [
            'phone' => ['required', 'mobile', "unique:users,phone"],
            'password' => ['required', 'min:3', 'max:12'],
            'password_confirmation' => ['confirm:password']
        ];

        if (! routeIs('admin.user.store')) {
            $rules['phone'] = ['required', 'mobile', "unique:users,phone,{$this->id}"];
        }

        if (! $with_passwords) {
            unset($rules['password']);
            unset($rules['password_confirmation']);
        }

        return $rules;
    }

    public function byPhone(string $phone): static|bool
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
            'is_admin' => 0
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

    public function isAdmin(): bool
    {
        return $this->is_admin === 1;
    }

    public function viewLink(): string
    {
        return route('user.show', ['id' => $this->id]);
    }

    public function editLink(): string
    {
        return route('admin.user.edit', ['id' => $this->id]);
    }

    public function makeAdmin(): User
    {
        return $this->update([
            'is_admin' => 1
        ]);
    }

    public function makeRegularUser(): User
    {
        return $this->update([
            'is_admin' => 0
        ]);
    }

    public function revise(array $data)
    {
        $password = $data['password'] ? password_hash($data['password'], PASSWORD_BCRYPT) : $this->password;

        return $this->update([
            'name' => $data['name'] ?? null,
            'last_name' => $data['last_name'] ?? null,
            'phone' => $data['phone'],
            'password' => $password,
            'email' => $data['email'] ?? null,
            'address' => $data['address'] ?? null
        ]);
    }
}