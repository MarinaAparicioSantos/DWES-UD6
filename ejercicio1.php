<?php

// Clase Persona Estructura

class Persona
{
    private $nombre;
    private $dni;
    private $sexo;
    private $peso;
    private $altura;

    public function __construct($nombre, $dni, $sexo, $peso, $altura)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    // Getters y Setters (Modificadores)

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getDni()
    {
        return $this->dni;
    }

    function setDni($dni)
    {
        $this->dni = $dni;
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

    function __toString()
    {
        return "nombre: " . $this-> nombre . "dni: " . $this->dni . "sexo: " . $this->sexo . "peso: " . $this->peso . "altura: " .$this->altura;

    }

    // $humano = new Persona();
    // $humano = setNombre('Pepito');
    // $humano = setDni('213SKD');
    // $humano = setSexo ('H');
    // $humano = setPeso (70);
    // $humano = setAltura (175);



    // Fuera clase -> Mostrar y llamada constructor

    function mostrar () {
        //echo "nombre: " . $this->$humano.getNombre . $this->$humano.getDni . $this->$humano.getSexo . $this->$humano.getPeso . $this->$humano.getAltura
        return "nombre: " . $this-> nombre . "dni: " . $this->dni . "sexo: " . $this->sexo . "peso: " . $this->peso . "altura: " .$this->altura;
    
    }

}


?>

<!-- Desarrollar el código PHP necesario para crear una clase de nombre Persona que almacene el nombre, el DNI, el sexo, el peso y la altura.
Crea un constructor que reciba todos los valores necesario para inicializar el objeto.
Añade los métodos consultores y modificadores de todos los atributos.
Crea una función mostrar que muestre una línea con todos los atributos.
Dentro del archivo, pero fuera de la clase, llama al constructor de la clase y al método mostrar.
Llama a los métodos modificadores y vuelve a invocar al método mostrar. -->

