<?php
/*-------- 4 Pillars of OOP ---------*/

// 1. Encapsulation
// 2. Abstraction




// 3. Inheritance
require('Car.php');
require('Dena.php');
require('BMW.php');
$dena = new Dena();
$dena->tiresStatus();
// echo $dena->tiresCount;
// $dena->move();
// $dena->brake();
// $dena->drift();
// echo $dena->color;

$bmw = new BMW();
// $bmw->move();
// echo $bmw->color;


// 4. Polymorphism