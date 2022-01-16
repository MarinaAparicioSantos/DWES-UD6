<?php

include_once "class.Vehiculo.php";
include_once "class.Cuatro_ruedas.php";
class Coche extends Cuatro_ruedas{

    private $numero_cadenas_nieve;

    public function __construct($numero_cadenas_nieve,$numero_puertas, $color, $peso)
    {

        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        parent:: __construct($numero_puertas, $color, $peso);
    }


    public function aniadir_cadenas_nieve($cantidad){


        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve + $cantidad;


    }

    public function quitar_cadenas_nieve($cantidad){

        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve - $cantidad;

        
    }

}

?>