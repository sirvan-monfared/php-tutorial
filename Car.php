<?php

class Car {
    public $color = 'red';
    public $name = 'car';
    public $gear;
    protected $tiresCount = 4;

    public function move() {
        echo "{$this->name} is Moving...";
    }

    public function brake() {
        echo "Car is stopped...";
    }

    public function tiresStatus() {
        echo "This car has {$this->tiresCount} Tires and all of them are healthy";
    }
}