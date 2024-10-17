<?php

class Moto extends Vehiculo{



public function __construct($numRuedas, $color, $posx, $posy,
$velocidad, $vMax,){
parent::__construct($numRuedas, $color, $posx, $posy, $velocidad, $vMax);
$this->numRuedas=2;

}

public function hacerCaballito(): string{
    $random=rand(0,1);
    return $random===0 ? "¡Guau!" : "¡Ouch!";
}
















}