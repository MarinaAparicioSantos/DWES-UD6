<?php

include_once "class.Vehiculo.php";

class Dos_ruedas extends Vehiculo{

    private float $cilindrada;

    public function __construct($cilindrada, $color, $peso)
    {
        $this->cilindrada = $cilindrada;

        parent::__construct($color, $peso);  
    }

    public function poner_gasolina($litros){

        $kilos = $litros / 1.5;

        $this->peso = $this->peso + $kilos;



    }



}


?>