<?php

class Vehiculo{

    protected $numRuedas;

    private $color;

    private $posx;

    private $posy;

    private $velocidad;

    private $vMax;

    public function __construct($numRuedas,$color,$posx,$posy,$velocidad,$vMax) {
        $this->numRuedas=$numRuedas;
        $this->color=$color;
        $this->posx=0;
        $this->posy=0;
        $this->velocidad=0;
        $this->vMax=$vMax;
    }
    public function acelerar($incremento){

        $newVelocidad=$this->velocidad+$incremento;
        if($newVelocidad>$this->vMax){
            $this->velocidad = $this->vMax;

            echo"No es posible realizar la aceleración, la velocidad será ". $this->vMax;
        }

        else{
            $this->velocidad = $newVelocidad;
            return "Velocidad actual: " . $this->velocidad;

        }}

    public function frenar($decremento) {
        $newVelocidad=$this->velocidad+$decremento;
        return $newVelocidad;
    }

    public function tocarClaxon(): string {
        return "Beep Beep!";
    }
   
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getNumRuedas()
    {
        return $this->numRuedas;
    }

    /**
     * @param mixed $numRuedas
     */
    public function setNumRuedas($numRuedas): void
    {
        $this->numRuedas = $numRuedas;
    }

    public function getPosx(): int
    {
        return $this->posx;
    }

    public function setPosx(int $posx): void
    {
        $this->posx = $posx;
    }

    public function getPosy(): int
    {
        return $this->posy;
    }

    public function setPosy(int $posy): void
    {
        $this->posy = $posy;
    }

    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }

    /**
     * @return mixed
     */
    public function getVMax()
    {
        return $this->vMax;
    }

    /**
     * @param mixed $vMax
     */
    public function setVMax($vMax): void
    {
        $this->vMax = $vMax;
    }



}