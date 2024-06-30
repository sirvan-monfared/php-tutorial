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

    public function addError($key, $message): void
    {
        $this->errors[$key] = $message;
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
            'confirm' => "فیلدهای {$field} و تکرار {$field} مطابقت ندارند",
            'unique' => "{$field} قبلا در سایت ثبت شده است ",
            'int' => "{$field} باید از نوع عددی باشد"
        };
    }

    public function required(mixed $value): bool
    {
        return !empty(trim($value));
    }

    public function exact(mixed $value,int $param): bool
    {
        return strlen($value) === $param;
    }

    public function mobile(mixed $value): bool
    {
        $pattern = "/^09[012349]\d{8}$/";
        
        return preg_match($pattern, $value);
    }

    public function min(mixed $value, int $param): bool
    {
        return strlen($value) >= $param;
    }

    public function max(mixed $value, int $param): bool
    {
        return strlen($value) <= $param;
    }

    public function int(mixed $value): bool
    {
        return is_numeric($value);
    }

    public function confirm(mixed $value, string $param): bool
    {
        return $value === $this->data[$param];
    }

    public function unique(mixed $value, string $param): bool
    {
        [$table, $column, $except] = explode(',', $param);

        $db = new Database();
        $found = $db->prepare("SELECT `id` FROM {$table} WHERE {$column}=:{$column} LIMIT 1", [
            "{$column}" => $value
        ])->find();

        if ($found && $except && $found['id'] === (int) $except) {
            return true;
        }

        return ! $found;
    }

}