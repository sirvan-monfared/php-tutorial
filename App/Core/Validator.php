<?php

namespace App\Core;

class Validator
{
    protected array $errors = [];
    public function __construct(protected array $data, protected array $rules, protected array $names = [])
    {
        $this->validate();
    }

    public function validate(): void
    {
        foreach($this->rules as $field => $rules) {
            $value = $this->data[$field];

            foreach($rules as $rule) {
                [$rule_name, $rule_param] = explode(':', $rule);

                if (! $this->$rule_name($value, $rule_param)) {
                    $this->errors[$field] = $this->messages($field, $rule_name, $rule_param);
                    break;
                }
            }
        }
    }

    public function passed(): bool
    {
        return ! $this->errors;
    }

    public function failed(): bool
    {
        return ! $this->passed();
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function messages($field, $rule, $param): string
    {
        $field = $this->names[$field] ?? $field;

        if ($rule === 'confirm') {
            $field = $this->names[$param] ?? $param;
        }

        return match($rule) {
            'required' => "وارد کردن فیلد {$field} ضروری است",
            'exact' => "{$field} باید دقیقا دارای {$param} کاراکتر باشد",
            'mobile' => "{$field} وارد شده معتبر نمی باشد",
            'min' => "{$field} باید بیش از {$param} کاراکتر باشد",
            'max' => "{$field} باید حداکثر از {$param} کاراکتر باشد",
            'confirm' => "فیلدهای {$field} و تکرار {$field} مطابقت ندارند"
        };
    }

    public function required(string $value): bool
    {
        return !empty(trim($value));
    }

    public function exact(string $value,int $param): bool
    {
        return strlen($value) === $param;
    }

    public function mobile(string $value): bool
    {
        $pattern = "/^09[012349]\d{8}$/";
        
        return preg_match($pattern, $value);
    }

    public function min(string $value, int $param): bool
    {
        return strlen($value) >= $param;
    }

    public function max(string $value, int $param): bool
    {
        return strlen($value) <= $param;
    }

    public function confirm($value, string $param): bool
    {
        return $value === $this->data[$param];
    }
}