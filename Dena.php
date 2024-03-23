<?php

class Dena extends Car {
    // public $color = 'white';
    public $name = 'dena';
    protected $tiresCount = 3;

    public function drift() {
        echo "this car has {$this->tiresCount} Tires and is Drifting...";
    }
}