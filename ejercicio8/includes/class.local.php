<?php

class Local
{

    private string $ciudad;
    private string $calle;
    private int $numeroDePlantas;
    private float $area;

    private Dimensiones $dimensiones;


    function __construct($ciudad, $calle, $numeroDePlantas, $area, $dimensiones)
    {
        $this->ciudad = $ciudad;
        $this->calle = $calle;
        $this->numeroDePlantas = $numeroDePlantas;
        $this->area = $area;
        var_dump($dimensiones instanceof Dimensiones);
        $this->dimensiones = $dimensiones;
    }

    function getDimensiones()
    {
        return $this->dimensiones;
    }

    function setDimensiones($dimensiones)
    {
        $this->dimensiones = $dimensiones;
    }

    function getArea()
    {
        return $this->area;
    }

    function setArea($area)
    {
        $this->area = $area;
    }
}

var_dump($dimensiones instanceof Dimensiones);
