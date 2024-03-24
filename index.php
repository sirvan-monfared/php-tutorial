<?php
class User {
    public $age;
    // constructor property promotion
    public function __construct(
        public string $name, 
        public string $lastName) 
    {
        
    }

    public function fullName() {
        return "{$this->name} {$this->lastName}";
    }
}


$user = new User('sirvan', 'monfared');

echo $user->fullName();