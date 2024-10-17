<?php

class Coche extends Vehiculo{


private $capacidadTotalMaletero;

private $capacidadRestanteMaletero;

private $numPuertas;


public function __construct($numRuedas, $color, $posx, $posy,
 $velocidad, $vMax, $capacidadTotalMaletero, $capacidadRestanteMaletero)
{
parent::__construct($numRuedas, $color,
 $posx, $posy, $velocidad, $vMax);
$this->numRuedas=4;
$this->capacidadTotalMaletero = $capacidadTotalMaletero;
$this->capacidadRestanteMaletero = $capacidadTotalMaletero;
$this->numPuertas =min(3, 5);
}

public function meterEnMaletero($volumen){

if ($volumen>$this->$capacidadRestanteMaletero){

    echo "No hay espacio suficiente";
}
else
{ $this->capacidadRestanteMaletero -= $volumen;
    echo "Se ha añadido $volumen al maletero. Espacio restante: " . $this->capacidadRestanteMaletero;
}

}



public function vaciarMaletero(){

return $this -> capacidadRestanteMaletero=0;
}

public function tocarClaxon(): string{

    return "¡Honk, honk!";



}

}