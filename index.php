<?php
class User {
    public $age;
    public $fullName;
    // constructor property promotion
    public function __construct(
        public string $name, 
        public string $lastName) 
    {
        
    }

    public function fullName() {
        $this->fullName = "{$this->name} {$this->lastName}";

        return null;
    }

    public function yourAge() {
        return 25;
    }
}


$user = new User('sirvan', 'monfared');

// $user = null;

// if (isset($user)) {
//     echo $user->fullName();
// }

echo $user?->fullName()?->yourAge();

echo 'safsaf';



