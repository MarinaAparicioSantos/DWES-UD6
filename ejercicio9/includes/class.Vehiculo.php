<?php

class Vehiculo
{

    private  $color;
    private  $peso;


    public function __construct($color, $peso)
    {
        $this->color = $color;
        $this->peso = $peso;
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

    public function circula()
    {

        return "El vehículo está circulando.";
    }


    public function aniadir_persona($peso_persona)
    {

        return $this->peso = $this->peso + $peso_persona;
    }
}
