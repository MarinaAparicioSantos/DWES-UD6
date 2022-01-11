<?php

class Dimensiones
{


    private float $alto;
    private float $ancho;
    private float $largo;


    //constructor
    function __construct($alto, $ancho, $largo)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
    }


    //getter y setter
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {

        //el constructor llama directamente a los getters y los setters.
        try {
            if (is_float($valor) && $valor > 1) {

                $this->$atributo = $valor;
            }
        } catch (PDOException $e) {
            echo "No puede ser menor que 1 y tiene que ser float.";
        }
    }


    //metodo tostring

    function __toString()
    {

        echo "alto=" . $this->alto . " ancho= " . $this->ancho . " largo= " . $this->largo;
    }

    // function getAlto()
    // {
    //     return $this->alto;
    // }

    // function setAlto($alto)
    // {
    //     $this->alto = $alto;
    // }


    // function getAncho()
    // {
    //     return $this->ancho;
    // }

    // function setAncho($ancho)
    // {
    //     $this->ancho = $ancho;
    // }


    // function getLargo()
    // {
    //     return $this->largo;
    // }

    // function setLargo($largo)
    // {
    //     $this->largo = $largo;
    // }

}
