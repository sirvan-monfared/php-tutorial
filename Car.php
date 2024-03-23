<?php 
class Car {
    public $color;
    public $model;
    public $gear;
    public $oil;
    public $gas;
    public $material;
    public $gearMaterial;
    public $tireElasticity;
    public $brakePercision;

    public function start() {
        $this->igniteEngine();
        $this->pumpOil();
        $this->pumpGas();
        $this->handleElectricity();
        $this->moveTire();
        $this->moveBody();
    }
    
    public function accelerate() {}
    public function brake() {}


    private function igniteEngine() {}
    private function pumpOil() {}
    private function pumpGas() {}
    private function moveTires() {}
    private function Radiator() {}
    private function waterHeat() {}
}