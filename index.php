<?php
class User {
    public $age;
    public $fullName;
    private $google;
    // constructor property promotion
    public function __construct(
        public string $name, 
        public string $lastName) 
    {
        
    }

    public function __call($name, $arguments) {
        return '325325';
    }

    public function __get($name) {
        return $name;
    }

    public function fullName() {
        $this->fullName = "{$this->name} {$this->lastName}";

        return $this;
    }

    private function yourAge() {
        return 25;
    }

    public function __toString(): string
    {
        return time();
    }

    public function __invoke($x) {
        var_dump($x);
    }
}


$user = new User('sirvan', 'monfared');

echo $user('asfsa');

// echo '567546436';

