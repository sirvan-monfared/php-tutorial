<?php

class Dena extends Car {

    public function __construct() {
        parent::__construct(20);

        $this->brakePercision = 10;
    }

    // public $color = 'white';
    public $name = 'dena';
    protected $tiresCount = 3;

    public function drift() {
        echo "this car has {$this->tiresCount} Tires and is Drifting...";
    }

    public function move($km, $speed) {
        parent::move($km, $speed);

        echo "this is a new move with {$this->brakePercision} Percision";
    }
}