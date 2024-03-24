<?php
/*-------- 4 Pillars of OOP ---------*/

// 1. Encapsulation
// 2. Abstraction
// 3. Inheritance




// 4. Polymorphism
require('Car.php');
require('Dena.php');
require('BMW.php');


class User {

    public $car;

    public function __construct(Car $car) {
        $this->car = $car;
    }

}

$user = new User(new Dena);

$user->car->move(210, 50);