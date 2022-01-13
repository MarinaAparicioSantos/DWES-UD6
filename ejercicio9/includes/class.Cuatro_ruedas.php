<?php

class Cuatro_ruedas extends Vehiculo{

    private int $numero_puertas;

    public function __construct($numero_puertas, $color, $peso)
    {
        $this->numero_puertas = $numero_puertas;

        parent::__construct($color, $peso);  
    }


    //getter y setter (metodos especiales)
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function repintar($color){

        return $this->color = $color;


    }


}

?>