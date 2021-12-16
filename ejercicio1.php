<?php

class Persona
{


    private $nombre;
    private $DNI;
    private $sexo;
    private $peso;
    private $altura;


    function __construct($nombre, $DNI, $sexo, $peso, $altura)
    {

        $this->$nombre = "Erika";
        $this->$DNI = "74985645A";
        $this->$sexo = "Mujer";
        $this->$peso = 65;
        $this->$altura = 1.50;
    }


    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getDNI()
    {
        return $this->DNI;
    }

    function setDNI($DNI)
    {
        $this->DNI = $DNI;
    }

    function getSexo()
    {
        return $this->sexo;
    }

    function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    function getPeso()
    {
        return $this->peso;
    }

    function setPeso($peso)
    {
        $this->peso = $peso;
    }

    function getAltura()
    {
        return $this->altura;
    }

    function setAltura($altura)
    {
        $this->altura = $altura;
    }

    function mostrar($nombre, $DNI, $sexo, $peso, $altura ){


        echo $nombre->getNombre()." ,". $DNI->getDNI()." ,". $sexo->getSexo()." ,". $peso->getPeso()." ,". $altura->getAltura();
    }
}


// $people = new Persona();
// $people->mostrar("jacinta","216566675Y","mujer",40, 1.80 );


?>