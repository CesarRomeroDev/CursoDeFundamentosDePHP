<?php

class car {
    public $color;
    public $marca;
    public $modelo;

    public function __construct($color, $marca, $modelo) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;

    }

    public function printDataCar(){
        echo "color : " . $this->$color . " marca: " . $this->$marca . " modelo: " . $this->$modelo;
    }
}