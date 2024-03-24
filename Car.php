<?php

class Car {
    public $color = 'red';
    public $name = 'car';
    public $gear;
    protected $tiresCount = 4;
    protected $brakePercision;

    public function __construct($brakePercision) {
        $this->brakePercision = $brakePercision;
    }

    public function move($km, $speed) {
        echo "{$this->name} is Moving by {$km} and {$speed} kh/h";
    }

    public function brake() {
        echo "Car is stopped...";
    }

    public function tiresStatus() {
        echo "This car has {$this->tiresCount} Tires and all of them are healthy";
    }
}