<?php
class Coche
{
    private $numRuedas;
    public $color;
    private $posx;
    private $posy;
    private $velocidad;


    function mover($x, $y)
    {
        $this->posx = $x;
        $this->posy = $y;
    }

    function pitar()
    {
        return "Beeep beep";
    }

    function getPosicion()
    {
        return "x=$this->posx, y=$this->posy";
    }
}

