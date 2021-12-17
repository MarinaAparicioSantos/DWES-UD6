<?php

use Trabajador as GlobalTrabajador;

include "ejercicio1.php";

class Trabajador extends Persona
{
    private $nombreEmpresa;

    function __construct($nombre, $dni, $sexo, $peso, $altura, $nombreEmpresa)
    {
        parent::__construct($nombre, $dni, $sexo, $peso, $altura);
        $this->nombreEmpresa = $nombreEmpresa;
    }

    function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    function mostrar()
    {
        echo "nombre empresa: " . $this->nombreEmpresa; //return tieso
    }

    function mostrarCompleto()
    {
        echo parent::mostrar() . "nombre empresa: " . $this->nombreEmpresa;
    }

    function __toString()
    {
       return parent::__toString() . $this ->nombreEmpresa;
    }


}

$p1 = new Persona("erika", "2222222w","mujer",60,140);

echo $p1;

$p2 = new Trabajador("erika", "2222222w","mujer",60,140,"deloitte");

echo $p2;

?>

<!-- Utiliza el código del ejercicio 1 para crear una clase Trabajador que extienda a persona.
Añade un atributo que será el nombre de la empresa en que trabaja.
Añade los métodos consultores y modificadores.
Crea un constructor con todos los parámetros necesarios.
Crea un método mostrar que llame al método mostrar de la clase padre.
Crea un método mostrarCompleto que muestre toda la información del trabajador.
Prueba. -->